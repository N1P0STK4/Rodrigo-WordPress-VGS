<?php

/**
 * Slider.
 *
 * @package theme
 */

if (isset($args['slides'])) {
    $slides = $args['slides'];
} else {
    $slides = array();
}

if (! is_array($slides) || empty($slides)) {
    return;
}
?>

<section class="home-hero-slider swiper relative h-[520px] w-full overflow-hidden sm:h-[570px] lg:h-[697px]" aria-label="<?php esc_attr_e('Slider principal', '_tw'); ?>">

    <div class="swiper-wrapper">

        <?php foreach ($slides as $slide) : ?>
            <?php
            $pretitle = $slide['pretitle'] ?? '';
            $title    = $slide['title'] ?? '';
            $image    = $slide['image'] ?? array();
            $button   = $slide['button'] ?? array();

            $image_url = is_array($image) ? ($image['url'] ?? '') : $image;
            $image_alt = is_array($image) ? ($image['alt'] ?? '') : '';

            $button_url    = is_array($button) ? ($button['url'] ?? '') : '';
            $button_title  = is_array($button) ? ($button['title'] ?? '') : '';
            $button_target = is_array($button) && ! empty($button['target'])
                ? $button['target']
                : '_self';
            ?>

            <article class="swiper-slide relative">

                <?php if ($image_url) : ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="absolute inset-0 h-full w-full object-cover object-[35%_center] sm:object-[30%_center] lg:object-[28%_20%]">
                <?php endif; ?>

                <div class="absolute inset-0 bg-[#142d79]/70"></div>

                <div class="relative z-10 mx-auto flex h-full w-full max-w-[1309px] items-center justify-center px-5 sm:px-8 lg:px-[90px]">

                    <div class="w-full max-w-[1000px] translate-y-[25px] text-center text-white sm:translate-y-[40px] lg:translate-y-[90px]">

                        <?php if ($pretitle) : ?>
                            <p class="mx-auto max-w-[900px] text-[24px] font-semibold leading-[1.15] tracking-[-0.5px] text-white sm:text-[32px] sm:leading-[1.2] md:text-[40px] lg:text-[49px] lg:leading-[85px] lg:tracking-[-1px]">
                                <?php echo esc_html($pretitle); ?>
                            </p>
                        <?php endif; ?>

                        <?php if ($title) : ?>
                            <div class="text-center sm:-mt-1 lg:-mt-6">
                                <div class="inline-block max-w-full">

                                    <h2 class="break-words text-[36px] font-extrabold uppercase leading-[1.05] tracking-[-0.5px] text-[#9FCE00] sm:text-[46px] md:text-[56px] lg:text-[64px] lg:leading-[85px] lg:tracking-[-1px]">
                                        <?php echo esc_html($title); ?>
                                    </h2>

                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/vector.svg'); ?>" alt="imagen vector" aria-hidden="true" class="ml-auto block h-auto w-[150px] sm:w-[200px] md:w-[235px] lg:h-[25px] lg:w-[270px]">

                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($button_url && $button_title) : ?>
                            <a
                                href="<?php echo esc_url($button_url); ?>"
                                target="<?php echo esc_attr($button_target); ?>"
                                <?php echo '_blank' === $button_target ? 'rel="noopener noreferrer"' : ''; ?>
                                class="button button--cta mt-12 sm:mt-16 lg:mt-[80px]">
                                <?php echo esc_html($button_title); ?>
                            </a>
                        <?php endif; ?>

                    </div>
                </div>

            </article>

        <?php endforeach; ?>

    </div>

    <div class="pointer-events-none absolute inset-0 z-20 hidden lg:block">
        <div class="mx-auto flex h-full max-w-[1309px] items-center justify-between px-3 sm:px-6 lg:px-0">

            <button
                type="button"
                class="cursor-pointer home-slider-prev pointer-events-auto flex h-[42px] w-[42px] shrink-0 items-center justify-center rounded-full bg-[#9FCE00] text-white shadow-md transition hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white sm:h-[50px] sm:w-[50px] lg:h-[58px] lg:w-[58px]"
                aria-label="<?php esc_attr_e('Diapositiva anterior', '_tw'); ?>">

                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/eva_arrow-back-fill-left.svg'); ?>"
                    alt=""
                    aria-hidden="true"
                    class="h-[21px] w-[21px] sm:h-[25px] sm:w-[25px] lg:h-[29px] lg:w-[29px]">
            </button>

            <button
                type="button"
                class="cursor-pointer home-slider-next pointer-events-auto flex h-[42px] w-[42px] shrink-0 items-center justify-center rounded-full bg-[#9FCE00] text-white shadow-md transition hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white sm:h-[50px] sm:w-[50px] lg:h-[58px] lg:w-[58px]"
                aria-label="<?php esc_attr_e('Diapositiva siguiente', '_tw'); ?>">

                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/eva_arrow-back-fill-right.svg'); ?>"
                    alt=""
                    aria-hidden="true"
                    class="h-[21px] w-[21px] sm:h-[25px] sm:w-[25px] lg:h-[29px] lg:w-[29px]">
            </button>

        </div>
    </div>

</section>