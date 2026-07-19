<?php

/**
 * Bloque de servicios.
 * 
 * @package theme
 */

?>

<div class="mt-[55px] grid overflow-hidden rounded-[8px] bg-[#F3F5F6] sm:grid-cols-2 lg:grid-cols-4">

    <article class="service-card service-card--divider lg:after:block lg:before:block">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/punto-venta.svg'); ?>"
            alt=""
            aria-hidden="true"
            class="service-card__icon">

        <p class="service-card__text">
            Punto de venta<br>
            de panel sándwich
        </p>
    </article>

    <article class="service-card service-card--divider lg:after:block lg:before:block">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/diseno-fabricacion.svg'); ?>"
            alt=""
            aria-hidden="true"
            class="service-card__icon">

        <p class="service-card__text">
            Diseño y fabricación<br>
            de estructuras
        </p>
    </article>

    <article class="service-card service-card--divider lg:after:block lg:before:block">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/ingenieria.svg'); ?>"
            alt=""
            aria-hidden="true"
            class="service-card__icon">

        <p class="service-card__text">
            Ingeniería
        </p>
    </article>

    <article class="flex min-h-[80px] items-end justify-center gap-[12px] px-[28px] py-[24px]">
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/construccion-modular.svg'); ?>"
            alt=""
            aria-hidden="true"
            class="service-card__icon">

        <p class="service-card__text">
            Construcción<br>
            modular prefabricada
        </p>
    </article>

</div>