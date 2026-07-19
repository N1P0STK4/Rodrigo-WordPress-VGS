<?php

/**
 * Bloque que va despues del slider.
 *
 * @package theme
 */

?>

<section class="bg-white py-[50px] sm:py-[65px] lg:py-[80px]">
    <div class="mx-auto w-full max-w-[1309px]">

        <div class="mb-20 text-center">
            <h2 class="text-[24px] font-medium leading-none text-[#3E509D] sm:text-[28px] lg:text-[36px]">
                ¿Por qué nuestro

                <span class="relative inline-block whitespace-nowrap font-semibold uppercase leading-none text-[#9FCE00]">
                    PANEL SÁNDWICH

                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/subrayado-azul.svg'); ?>"
                        alt=""
                        aria-hidden="true"
                        class="absolute right-0 top-full mt-[5px] block h-auto w-[180px] max-w-none lg:w-[270px]">
                </span>?
            </h2>
        </div>

        <div class="grid grid-cols-1 gap-4 px-5 sm:grid-cols-2 sm:px-6 lg:grid-cols-4 lg:gap-[18px] lg:px-0">

            <article
                class="feature-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/Group 471.svg'); ?>"
                    alt=""
                    aria-hidden="true"
                    class="feature-card__icon">

                <p
                    class="feature-card__text">
                    Atención<br>
                    real y personalizada
                </p>
            </article>

            <article
                class="feature-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/asesoramiento-tecnico.svg'); ?>"
                    alt=""
                    aria-hidden="true"
                    class="feature-card__icon">

                <p class="feature-card__text">
                    Asesoramiento<br>
                    técnico especializado
                </p>
            </article>

            <article
                class="feature-card">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/logistica.svg'); ?>"
                    alt=""
                    aria-hidden="true"
                    class="feature-card__icon">

                <p class="feature-card__text">
                    Logística<br>
                    eficiente y adaptable
                </p>
            </article>

            <article
                class="feature-card lg:px-[20px] lg:pl-0">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/compromiso-calidad.svg'); ?>"
                    alt=""
                    aria-hidden="true"
                    class="feature-card__icon">

                <p class="flex h-[89px] items-center text-[16px] font-semibold leading-[16px] tracking-[0] text-[#3E509D]">
                    Compromiso con la calidad
                </p>
            </article>

        </div>

    </div>
</section>