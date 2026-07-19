<?php

/**
 * Bloque de reseñas.
 * 
 * @package theme
 */

$reviews = get_field('resenas');

if (!$reviews) {
    return;
}

?>

<section class="bg-[#E9EEF1] py-[48px] md:py-[58px]">
    <div class="mx-auto w-full max-w-[1309px]">

        <div class="mb-[34px] mx-5 flex items-center justify-between sm:mx-8 lg:mx-0">

            <div class="hidden w-[110px] md:block"></div>

            <h2
                class="text-[28px] font-medium leading-[1.1] text-[#3E509D] lg:text-[36px]">
                Reseñas de
                <span class="text-[#9FCE00]">
                    CLIENTES
                </span>
            </h2>

            <div class="flex items-center gap-[8px]">

                <button
                    type="button"
                    class="cursor-pointer reviews-slider-prev flex h-[58px] w-[58px] items-center justify-center rounded-full border border-[#3E509D] bg-white text-[#3E509D] transition hover:bg-[#d5d5d5] hover:text-white"
                    aria-label="Reseña anterior">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-review-left.svg'); ?>"
                        alt=""
                        aria-hidden="true"
                        class="h-[29px] w-[29px]">
                </button>

                <button
                    type="button"
                    class="cursor-pointer reviews-slider-next flex h-[58px] w-[58px] items-center justify-center rounded-full bg-[#3E509D] text-white transition hover:bg-[#314181]"
                    aria-label="Siguiente reseña">
                    <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/arrow-review-right.svg'); ?>"
                        alt=""
                        aria-hidden="true"
                        class="h-[29px] w-[29px]">
                </button>

            </div>

        </div>

        <div class="swiper reviews-slider overflow-hidden">

            <div class="swiper-wrapper !h-auto items-stretch">

                <?php foreach ($reviews as $review) : ?>
                    <?php
                    $name        = $review['nombre-resenas'] ?? '';
                    $rating      = (int) ($review['estrellas-resenas'] ?? 0);
                    $date        = $review['fecha-resena'] ?? '';
                    $image       = $review['imagen-resea'] ?? null;
                    $description = $review['descripcion-resena'] ?? '';

                    $rating = max(0, min(5, $rating));

                    $image_url = '';
                    $image_alt = $name;

                    if (is_array($image)) {
                        $image_url = $image['sizes']['thumbnail'] ?? $image['url'] ?? '';
                        $image_alt = $image['alt'] ?: $name;
                    }
                    ?>

                    <div class="swiper-slide flex !h-auto">

                        <article class="flex h-full w-full flex-col bg-white px-[21px] pb-[28px] pt-[27px]">

                            <div class="flex items-start justify-between gap-4">

                                <div class="flex min-w-0 items-center">

                                    <?php if ($image_url) : ?>
                                        <img
                                            src="<?php echo esc_url($image_url); ?>"
                                            alt="<?php echo esc_attr($image_alt); ?>"
                                            class="h-[60px] min-h-[60px] w-[60px] min-w-[60px] shrink-0 rounded-full object-cover"
                                            loading="lazy"
                                            width="60"
                                            height="60">
                                    <?php endif; ?>

                                    <span
                                        class="mx-[10px] block h-[58px] w-px shrink-0 bg-[#9FCE00]"
                                        aria-hidden="true"></span>

                                    <?php if ($name) : ?>
                                        <p class="text-[18px] font-bold leading-[21px] tracking-[0] text-[#3E509D]">
                                            <?php echo esc_html($name); ?>
                                        </p>
                                    <?php endif; ?>

                                </div>

                                <div class="shrink-0 text-right">

                                    <div
                                        class="flex justify-end text-[23px] leading-none text-[#F5BF2B]"
                                        aria-label="<?php echo esc_attr(
                                                        sprintf(
                                                            __('%d de 5 estrellas', 'theme'),
                                                            $rating
                                                        )
                                                    ); ?>">
                                        <?php for ($star = 1; $star <= 5; $star++) : ?>
                                            <span aria-hidden="true">
                                                <?php echo $star <= $rating ? '★' : '☆'; ?>
                                            </span>
                                        <?php endfor; ?>
                                    </div>

                                    <?php if ($date) : ?>
                                        <time class="mt-[3px] block text-right text-[15px] font-normal leading-[21px] tracking-[0] text-[#1F1E17]/50">
                                            <?php echo esc_html($date); ?>
                                        </time>
                                    <?php endif; ?>

                                </div>

                            </div>

                            <?php if ($description) : ?>
                                <p class="mt-[27px] text-[16px] font-normal leading-[27px] tracking-[0] text-[#4F5665]">
                                    <?php echo esc_html($description); ?>
                                </p>
                            <?php endif; ?>

                        </article>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>
</section>