<?php
/**
 * Procesamiento del formulario de presupuesto.
 *
 * @package theme
 */

add_action(
    'admin_post_enviar_presupuesto',
    'theme_handle_quote_form'
);

add_action(
    'admin_post_nopriv_enviar_presupuesto',
    'theme_handle_quote_form'
);

/**
 * Procesa y envía el formulario de presupuesto.
 */
function theme_handle_quote_form(): void
{
    check_admin_referer(
        'enviar_presupuesto_action',
        'presupuesto_nonce'
    );

    $name = sanitize_text_field(
        wp_unslash($_POST['nombre'] ?? '')
    );

    $phone = sanitize_text_field(
        wp_unslash($_POST['telefono'] ?? '')
    );

    $email = sanitize_email(
        wp_unslash($_POST['email'] ?? '')
    );

    $material = sanitize_text_field(
        wp_unslash($_POST['material'] ?? '')
    );

    $meters = absint($_POST['metros'] ?? 0);

    $province = sanitize_text_field(
        wp_unslash($_POST['provincia'] ?? '')
    );

    $privacy_accepted = isset($_POST['politica_privacidad']);

    if (
        empty($name) ||
        ! is_email($email) ||
        empty($material) ||
        $meters < 1 ||
        empty($province) ||
        ! $privacy_accepted
    ) {
        theme_quote_form_redirect('error');
    }

    $recipient = sanitize_email(get_option('admin_email'));

    $subject = sprintf(
        'Nueva solicitud de presupuesto de %s',
        $name
    );

    $message = implode(
        PHP_EOL,
        [
            'Nueva solicitud de presupuesto',
            '',
            sprintf('Nombre: %s', $name),
            sprintf('Teléfono: %s', $phone ?: 'No indicado'),
            sprintf('Correo: %s', $email),
            sprintf('Material: %s', $material),
            sprintf('Metros cuadrados: %d', $meters),
            sprintf('Provincia: %s', $province),
        ]
    );

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        sprintf('Reply-To: %s <%s>', $name, $email),
    ];

    $sent = wp_mail(
        $recipient,
        $subject,
        $message,
        $headers
    );

    theme_quote_form_redirect($sent ? 'success' : 'error');
}

/**
 * Redirige a la página anterior después del envío.
 *
 * @param string $status Estado del envío.
 */
function theme_quote_form_redirect(string $status): void
{
    $redirect_url = wp_get_referer() ?: home_url('/');

    $redirect_url = add_query_arg(
        'quote-status',
        $status,
        $redirect_url
    );

    wp_safe_redirect($redirect_url . '#quote-form');
    exit;
}