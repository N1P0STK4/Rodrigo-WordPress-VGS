<?php

/**
 * Página principal.
 *
 * @package theme
 */

get_header();

$slides = function_exists('get_field') ? get_field('home_slides') : array();

if (! is_array($slides)) {
    $slides = array();
}

?>

<main id="primary">

    <?php
        get_template_part(
            'template-parts/slider',
            null,
            array(
                'slides' => $slides,
            )
        );

        get_template_part("template-parts/benefits");
        get_template_part("template-parts/products");
        get_template_part("template-parts/quote-form");
        get_template_part("template-parts/about");
        get_template_part("template-parts/reviews");
        get_template_part("template-parts/contact-cta");
    ?>

</main>

<?php
get_footer();
