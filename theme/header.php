<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays the `head` element and everything up
	 * until the `#content` element.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package _tw
	 */

	?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class('font-sans'); ?>>

	<?php wp_body_open(); ?>

	<div id="page">
		<header class="absolute left-0 top-0 z-50 w-full">
			<div class="mx-auto">

				<!-- Barra superior -->
				<div class="flex h-[70px]  w-full items-center justify-between bg-[#9FCE00] text-[12px] font-semibold text-white">
					<div class="mx-5 flex h-full w-full items-center justify-between sm:mx-8 lg:mx-auto lg:max-w-[1309px]">
						<a href="mailto:dominio@dominio.es" class="flex h-[28px] w-[175px] gap-2 items-center text-[15px] font-medium leading-[28px] text-white">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/Email.svg'); ?>" alt="Hero">
							<span>dominio@dominio.es</span>
						</a>

						<a
							href="tel:+34123456789"
							class="flex h-[45px] w-[152px] items-center justify-center gap-[10px] rounded-[30px] bg-white px-[24px]">
							<img
								src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/Phone.svg'); ?>"
								alt=""
								class="h-[16px] w-[16px] shrink-0">

							<span class="whitespace-nowrap text-[14px] font-bold tracking-[-0.008em] text-[#3E509D]">
								123 456 789
							</span>
						</a>
					</div>
				</div>

				<!-- Navegación -->
				<nav
					class="relative mx-auto flex h-[128px] w-full max-w-[1309px] items-center justify-end px-5 text-sm font-semibold text-white sm:px-8 min-[1309px]:px-0"
					aria-label="<?php esc_attr_e('Primary navigation', '_tw'); ?>">

					<!-- Menú de escritorio -->
					<div class="hidden min-[1309px]:block">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'container'      => false,
								'menu_class'     => 'flex flex-wrap items-center justify-end gap-x-7 gap-y-3',
								'fallback_cb'    => false,
							)
						);
						?>
					</div>

					<!-- Botón hamburguesa -->
					<button
						id="mobile-menu-button"
						type="button"
						class="flex h-[48px] w-[48px] cursor-pointer items-center justify-center rounded-md bg-[#3E509D] min-[1309px]:hidden"
						aria-controls="mobile-menu"
						aria-expanded="false"
						aria-label="<?php esc_attr_e('Abrir menú', '_tw'); ?>">

						<svg
							id="menu-open-icon"
							class="h-7 w-7"
							viewBox="0 0 24 24"
							fill="none"
							stroke="currentColor"
							stroke-width="2"
							aria-hidden="true">
							<path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>

						<svg
							id="menu-close-icon"
							class="hidden h-7 w-7"
							viewBox="0 0 24 24"
							fill="none"
							stroke="currentColor"
							stroke-width="2"
							aria-hidden="true">
							<path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"></path>
						</svg>
					</button>

					<!-- Menú móvil -->
					<div
						id="mobile-menu"
						class="absolute left-5 right-5 top-full hidden overflow-hidden rounded-md bg-white shadow-lg sm:left-8 sm:right-8 min-[1309px]:hidden">

						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'container'      => false,
								'menu_class'     => 'flex flex-col [&_a]:block [&_a]:border-b [&_a]:border-[#E8E8E8] [&_a]:px-6 [&_a]:py-4 [&_a]:text-[#3E509D] [&_a]:transition [&_a:hover]:bg-[#F3F6F7] [&_li:last-child_a]:border-b-0',
								'fallback_cb'    => false,
							)
						);
						?>
					</div>
				</nav>
			</div>
		</header>