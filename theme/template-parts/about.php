<?php

/**
 * Bloque sobre nosotros.
 * 
 * @package theme
 */

?>

<section class="bg-white py-[110px]">
    <div class="mx-auto max-w-[1309px]">

        <div class="grid min-h-[454px] items-start gap-[44px] lg:grid-cols-[423px_1fr] lg:gap-[44px]">

            <!-- Imagen -->
            <div>
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/paneles.png'); ?>"
                    alt="Paneles sándwich prefabricados"
                    class="w-full object-cover [transform:scaleX(-1)] lg:h-[454px] lg:w-[423px]">
            </div>

            <!-- Contenido -->
            <div class="relative mx-5 flex h-full flex-col sm:mx-8 lg:mx-0">
                <h2 class="text-[28px] font-medium leading-[1.1] text-[#3E509D] lg:text-[36px]">
                    Profesionales y
                    <span class="font-semibold uppercase text-[#9FCE00]">
                        CERCANOS
                    </span>
                </h2>

                <div class="mt-[36px] max-w-[594px] text-[16px] font-normal leading-[32px] tracking-[0] text-[#4F5665]">
                    <p>
                        Por eso, en
                        <strong class="font-bold text-[#3E509D]">
                            XXXXXX
                        </strong>
                        estamos en constante desarrollo en los materiales y técnicas
                        de la construcción modular prefabricada.
                    </p>

                    <p class="mt-[36px]">
                        Contamos con un excelente equipo de ingenieros, delineantes,
                        técnicos y montadores con experiencia y profesionalidad con el
                        fin de que el cliente siempre tenga el mejor resultado posible.
                    </p>

                    <p class="mt-[36px]">
                        Nos encanta asesorarte e intentar dar solución a tus inquietudes
                        y proyectos y para ello creemos en el trato personal y humano
                        para poder resolver todas tus dudas.
                    </p>
                </div>

                <a
                    href="#"
                    class="button button--outline mt-[40px] self-start h-[59px] px-[24px] py-[20px] text-[18px] lg:mt-auto">
                    Contacta con nosotros
                </a>

                <!-- Flecha decorativa -->
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/flecha-verde.svg'); ?>"
                    alt=""
                    aria-hidden="true"
                    class="pointer-events-none absolute right-0 top-[-5px] hidden h-auto w-[373px] min-[1310px]:block">
            </div>
        </div>

        <!-- Servicios -->
        <?php get_template_part("template-parts/services"); ?>
    </div>
</section>