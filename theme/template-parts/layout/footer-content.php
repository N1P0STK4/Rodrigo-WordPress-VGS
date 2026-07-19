<?php

/**
 * Footer Content
 *
 * @package _tw
 */
?>

<footer class="mt-auto">

	<div class="bg-[#3e509d]">

		<div class="mx-5 flex max-w-[1309px] flex-col gap-12 py-[54px] sm:mx-8 lg:mx-auto lg:flex-row lg:items-start">

			<!-- Contacto -->
			<div class="mt-auto lg:w-[358px] lg:shrink-0">
				<div class="flex flex-col justify-center">
					<ul class="space-y-6">
						<li class="flex items-center gap-2">

							<img
								src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/email-verde.svg'); ?>"
								alt=""
								class="h-5 w-5 shrink-0">

							<a
								href="mailto:dominio@dominio.es"
								class="text-[13px] font-normal leading-none text-white transition hover:text-[#9FCE00]">

								dominio@dominio.es

							</a>

						</li>

						<li class="flex items-center gap-2">

							<img
								src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/phone.svg'); ?>"
								alt=""
								class="h-5 w-5 shrink-0">

							<a
								href="tel:123456789"
								class="text-[13px] font-normal leading-none text-white transition hover:text-[#9FCE00]">

								123 456 789

							</a>

						</li>

						<li class="flex items-center gap-2">

							<img
								src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/location.svg'); ?>"
								alt=""
								class="h-6 w-6 shrink-0">

							<p class="text-[13px] font-normal leading-[16px] text-white">

								Polígono Industrial <strong>"XX XXXXXX"</strong><br>
								Parcela XX 12345, Zaragoza

							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="flex flex-1 flex-col gap-10 lg:flex-row lg:gap-[60px]">
				<!-- Productos -->
				<div>

					<h3 class="mb-5 text-[20px] font-bold uppercase leading-[20px] text-[#9FCE00]">

						PRODUCTOS

					</h3>

					<?php
					wp_nav_menu(
						[
							'theme_location' => 'menu-2',
							'container'      => false,
							'menu_class'     => 'space-y-[4px] [&_a]:text-[15px] [&_a]:font-normal [&_a]:leading-[20px] [&_a]:text-white [&_a]:transition [&_a:hover]:text-[#9FCE00]',
							'fallback_cb'    => false,
							'depth'          => 1,
						]
					);
					?>

				</div>

				<!-- Información -->
				<div>

					<h3 class="mb-5 text-[20px] font-bold uppercase leading-[20px] text-[#9FCE00]">

						INFORMACIÓN GENERAL

					</h3>

					<?php
					wp_nav_menu(
						[
							'theme_location' => 'menu-3',
							'container'      => false,
							'menu_class'     => 'space-y-[4px] [&_a]:text-[15px] [&_a]:font-normal [&_a]:leading-[20px] [&_a]:text-white [&_a]:transition [&_a:hover]:text-[#9FCE00]',
							'fallback_cb'    => false,
							'depth'          => 1,
						]
					);
					?>

					<div class="mt-8 flex gap-4">

						<?php
						$socials = [
							'facebook-blue.svg',
							'x-blue.svg',
							'instagram-blue.svg',
						];

						foreach ($socials as $icon) :
						?>

							<a
								href="#"
								class="flex h-[40px] w-[40px] items-center justify-center rounded-full bg-[#9FCE00] transition hover:scale-105">

								<img
									src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/' . $icon); ?>"
									alt=""
									class="h-[14px] w-[14px]">

							</a>

						<?php endforeach; ?>

					</div>

				</div>

				<!-- Legal -->
				<div>

					<h3 class="mb-5 text-[20px] font-bold uppercase leading-[20px] text-[#9FCE00]">

						INFORMACIÓN LEGAL

					</h3>

					<?php
					wp_nav_menu(
						[
							'theme_location' => 'menu-4',
							'container'      => false,
							'menu_class'     => 'space-y-[4px] [&_a]:text-[15px] [&_a]:font-normal [&_a]:leading-[20px] [&_a]:text-white [&_a]:transition [&_a:hover]:text-[#9FCE00]',
							'fallback_cb'    => false,
							'depth'          => 1,
						]
					);
					?>

				</div>
			</div>

		</div>

	</div>

	<div class="bg-[#1a2862]">

		<div class="mx-auto flex h-[74px] max-w-[1309px] items-center justify-center px-6">

			<p class="text-center text-[15px] text-[#C6CBE8]">

				Copyright © <?php echo date('Y'); ?>
				Empresa | Todos los derechos reservados.

			</p>

		</div>

	</div>

</footer>