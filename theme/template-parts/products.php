<?php

/**
 * Bloque que que muestra las cards de los
 * productos.
 * 
 * @package theme
 */

$products_query = new WP_Query(
    array(
        'post_type'      => 'producto',
        'post_status'    => 'publish',
        'posts_per_page' => 6,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'no_found_rows'  => true,
    )
);

if ($products_query->have_posts()) : ?>

    <section class="bg-[#F4F7F8] py-[30px] sm:py-[70px] lg:pt-[60px] lg:pb-[90px]">

        <div class="mx-auto w-full max-w-[1310px] px-5 sm:px-6 lg:px-0">

            <h2 class="text-[28px] mb-[60px] text-center font-medium leading-[1.1] text-[#3E509D] lg:text-[36px]">
                <span class="uppercase text-[#9FCE00]">
                    Panel sándwich
                </span>
                para tu proyecto
            </h2>

            <div class="grid grid-cols-1 gap-[18px] sm:grid-cols-2 lg:grid-cols-3">

                <?php while ($products_query->have_posts()) : ?>
                    <?php
                    $products_query->the_post();

                    get_template_part(
                        'template-parts/product/card',
                        null,
                        array(
                            'product_id' => get_the_ID(),
                        )
                    );
                    ?>
                <?php endwhile; ?>

            </div>

        </div>

    </section>

<?php endif; ?>

<?php wp_reset_postdata(); ?>