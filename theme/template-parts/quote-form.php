<?php

/**
 * Bloque de formulario.
 * 
 * @package theme
 */

?>

<section>
    <div class="bg-[#E8EEF1] pt-[42px]">
        <div class="mx-auto max-w-[1309px] px-5 sm:px-6 lg:px-0">
            <div class="mb-[90px] text-center">
                <h2 class="text-[28px] font-medium leading-none text-[#3E509D] lg:text-[36px]">
                    Pide

                    <span class="relative inline-block whitespace-nowrap font-semibold uppercase leading-none text-[#9FCE00]">
                        PRESUPUESTO

                        <img
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/subrayado-azul.svg'); ?>"
                            alt=""
                            aria-hidden="true"
                            class="absolute right-0 top-full mt-[5px] block h-auto w-[180px] max-w-none lg:w-[270px]">
                    </span>
                </h2>
            </div>

            <form
                action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
                method="post"
                class="presupuesto-form">

                <input type="hidden" name="action" value="enviar_presupuesto">

                <?php wp_nonce_field('enviar_presupuesto_action', 'presupuesto_nonce'); ?>

                <div class="grid grid-cols-1 gap-x-[14px] gap-y-[28px] md:grid-cols-2 lg:grid-cols-3">

                    <div>
                        <label
                            for="presupuesto-nombre"
                            class="form-label">
                            Nombre*
                        </label>

                        <input
                            id="presupuesto-nombre"
                            name="nombre"
                            type="text"
                            placeholder="Nombre"
                            required
                            class="form-input">
                    </div>

                    <div>
                        <label
                            for="presupuesto-telefono"
                            class="form-label">
                            Teléfono
                        </label>

                        <input
                            id="presupuesto-telefono"
                            name="telefono"
                            type="tel"
                            placeholder="+34"
                            class="form-input">
                    </div>

                    <div>
                        <label
                            for="presupuesto-email"
                            class="form-label">
                            Correo electrónico*
                        </label>

                        <input
                            id="presupuesto-email"
                            name="email"
                            type="email"
                            placeholder="mail@mail.com"
                            required
                            class="form-input">
                    </div>

                    <div>
                        <label
                            for="presupuesto-material"
                            class="form-label">
                            Material*
                        </label>

                        <div class="relative">
                            <select
                                id="presupuesto-material"
                                name="material"
                                required
                                class="form-select">

                                <option value="" selected disabled>Material</option>
                                <option value="Panel sándwich">Panel sándwich</option>
                                <option value="Cubiertas">Cubiertas</option>
                                <option value="Lana de roca">Lana de roca</option>
                                <option value="Otro">Otro</option>
                            </select>

                            <svg
                                class="pointer-events-none absolute right-[16px] top-1/2 h-[10px] w-[16px] -translate-y-1/2"
                                viewBox="0 0 16 10"
                                fill="none"
                                aria-hidden="true">
                                <path
                                    d="M2 2L8 8L14 2"
                                    stroke="#9FCE00"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div>
                        <label
                            for="presupuesto-metros"
                            class="form-label">
                            Metros cuadrados*
                        </label>

                        <input
                            id="presupuesto-metros"
                            name="metros"
                            type="number"
                            min="1"
                            step="1"
                            placeholder="m²"
                            required
                            class="form-input">
                    </div>

                    <div>
                        <label
                            for="presupuesto-provincia"
                            class="form-label">
                            Provincia de entrega*
                        </label>

                        <div class="relative">
                            <select
                                id="presupuesto-provincia"
                                name="provincia"
                                required
                                class="form-select">

                                <option value="" selected disabled>Seleccione provincia</option>
                                <option value="Álava">Álava</option>
                                <option value="Albacete">Albacete</option>
                                <option value="Alicante">Alicante</option>
                                <option value="Almería">Almería</option>
                                <option value="Asturias">Asturias</option>
                                <option value="Ávila">Ávila</option>
                                <option value="Badajoz">Badajoz</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Burgos">Burgos</option>
                                <option value="Cáceres">Cáceres</option>
                                <option value="Cádiz">Cádiz</option>
                                <option value="Cantabria">Cantabria</option>
                                <option value="Castellón">Castellón</option>
                                <option value="Ceuta">Ceuta</option>
                                <option value="Ciudad Real">Ciudad Real</option>
                                <option value="Córdoba">Córdoba</option>
                                <option value="Cuenca">Cuenca</option>
                                <option value="Girona">Girona</option>
                                <option value="Granada">Granada</option>
                                <option value="Guadalajara">Guadalajara</option>
                                <option value="Gipuzkoa">Gipuzkoa</option>
                                <option value="Huelva">Huelva</option>
                                <option value="Huesca">Huesca</option>
                                <option value="Islas Baleares">Islas Baleares</option>
                                <option value="Jaén">Jaén</option>
                                <option value="La Coruña">La Coruña</option>
                                <option value="La Rioja">La Rioja</option>
                                <option value="Las Palmas">Las Palmas</option>
                                <option value="León">León</option>
                                <option value="Lleida">Lleida</option>
                                <option value="Lugo">Lugo</option>
                                <option value="Madrid">Madrid</option>
                                <option value="Málaga">Málaga</option>
                                <option value="Melilla">Melilla</option>
                                <option value="Murcia">Murcia</option>
                                <option value="Navarra">Navarra</option>
                                <option value="Ourense">Ourense</option>
                                <option value="Palencia">Palencia</option>
                                <option value="Pontevedra">Pontevedra</option>
                                <option value="Salamanca">Salamanca</option>
                                <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
                                <option value="Segovia">Segovia</option>
                                <option value="Sevilla">Sevilla</option>
                                <option value="Soria">Soria</option>
                                <option value="Tarragona">Tarragona</option>
                                <option value="Teruel">Teruel</option>
                                <option value="Toledo">Toledo</option>
                                <option value="Valencia">Valencia</option>
                                <option value="Valladolid">Valladolid</option>
                                <option value="Vizcaya">Vizcaya</option>
                                <option value="Zamora">Zamora</option>
                                <option value="Zaragoza">Zaragoza</option>
                            </select>

                            <svg
                                class="pointer-events-none absolute right-[16px] top-1/2 h-[10px] w-[16px] -translate-y-1/2"
                                viewBox="0 0 16 10"
                                fill="none"
                                aria-hidden="true">
                                <path
                                    d="M2 2L8 8L14 2"
                                    stroke="#9FCE00"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>

                </div>

                <div class="mt-[30px] space-y-[8px]">

                    <label class="checkbox items-center">
                        <input
                            type="checkbox"
                            name="informacion_comercial"
                            value="1"
                            class="peer sr-only">

                        <span
                            class="checkbox__box peer-checked:border-[#9FCE00] peer-checked:[&>img]:block">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/check.svg'); ?>"
                                alt=""
                                aria-hidden="true"
                                class="checkbox__icon">
                        </span>
                        <span class="ml-[10px] mt-[3px] text-[16px] font-normal leading-[24px] tracking-[0] text-[#4F5665]">
                            Acepto recibir información comercial, así como descuentos,
                            promociones y actualizaciones de producto pertinentes.
                        </span>
                    </label>

                    <label class="checkbox items-start">
                        <input
                            type="checkbox"
                            name="politica_privacidad"
                            value="1"
                            required
                            class="peer sr-only">

                        <span
                            class="checkbox__box peer-checked:border-[#9FCE00] peer-checked:[&>img]:block">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/check.svg'); ?>"
                                alt=""
                                aria-hidden="true"
                                class="checkbox__icon">
                        </span>
                        <span class="checkbox__text">
                            Confirmo que he leído y aceptado la
                            <a
                                href="<?php echo esc_url(home_url('/politica-de-privacidad/')); ?>"
                                class="font-normal text-[#3E509D] underline underline-offset-[2px]">
                                política de privacidad y venta
                            </a>.
                            <span class="text-[#EF4444]">*</span>
                        </span>
                    </label>

                </div>

                <div class="relative mt-[28px] flex justify-center -translate-y-[-33px]">
                    <button type="submit" class="cursor-pointer button button--primary h-[72px] px-[57px] text-[18px]">
                        PIDE PRESUPUESTO
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>