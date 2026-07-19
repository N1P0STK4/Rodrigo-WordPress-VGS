<?php
/**
 * Tarjeta reutilizable de producto.
 *
 * @package theme
 */

$product_id = isset($args['product_id'])
    ? absint($args['product_id'])
    : get_the_ID();

if (! $product_id) {
    return;
}

$product_title = get_the_title($product_id);
$product_url   = get_permalink($product_id);

$product_description = wp_html_excerpt(
    wp_strip_all_tags(get_post_field('post_content', $product_id)),
    135,
    '...'
);
?>

<article class="flex h-full min-h-[462px] flex-col overflow-hidden bg-white shadow-[0_12px_28px_rgba(31,56,100,0.08)]">

    <a
        href="<?php echo esc_url($product_url); ?>"
        class="block overflow-hidden bg-[#E7ECEF]">

        <?php if (has_post_thumbnail($product_id)) : ?>

            <?php
            echo get_the_post_thumbnail(
                $product_id,
                'large',
                array(
                    'class'   => 'h-full w-full object-contain transition duration-300 hover:scale-[1.03]',
                    'loading' => 'lazy',
                )
            );
            ?>

        <?php else : ?>

            <div class="flex h-[230px] w-full items-center justify-center bg-[#E7ECEF] text-[14px] text-[#4F5665]">
                Sin imagen
            </div>

        <?php endif; ?>

    </a>

    <div class="flex flex-1 flex-col items-center bg-white px-[28px] pb-11 pt-10 text-center">

        <h3 class="text-[24px] font-normal leading-[26px] text-[#3E509D]">

            <a
                href="<?php echo esc_url($product_url); ?>"
                class="transition hover:text-[#9FCE00]">

                <?php echo esc_html($product_title); ?>

            </a>

        </h3>

        <?php if ($product_description) : ?>

            <p class="mt-7 text-[15px] font-normal leading-[22px] text-[#4F5665]">
                <?php echo esc_html($product_description); ?>
            </p>

        <?php endif; ?>

        <a
            href="<?php echo esc_url($product_url); ?>"
            class="mt-8 inline-flex min-h-[41px] items-center justify-center rounded-full bg-[#9FCE00] px-[23px] text-[16px] font-bold uppercase text-white transition hover:bg-[#3E509D] focus:outline-none focus:ring-2 focus:ring-[#3E509D] focus:ring-offset-2">

            Leer más

        </a>

    </div>

</article>