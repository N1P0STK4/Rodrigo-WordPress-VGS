# Rodrigo WordPress VGS

Tema personalizado de WordPress desarrollado para la prueba técnica de **VGS** a partir del starter theme **_tw**, utilizando **Tailwind CSS**, **JavaScript**, **SwiperJS** y **Advanced Custom Fields**.

## Vídeo de demostracion

- **Vídeo demostrativo:** [enlace del video](https://youtu.be/zOBFlqhhI1g) (#)

## Funcionalidades principales

- Maquetación responsive basada en el diseño proporcionado.
- Página de inicio personalizada.
- Slider principal editable mediante ACF.
- Slider de reseñas con SwiperJS.
- Custom Post Type `Productos`.
- Tarjeta de producto reutilizable mediante `get_template_part()`.
- Consulta personalizada de los últimos seis productos.
- Plugin propio para registrar el contenido personalizado.
- Compilación de CSS y JavaScript mediante Node.js.
- Contenido de demostración para replicar el proyecto.

## Requisitos

- WordPress.
- PHP 8.0 o superior.
- MySQL o MariaDB.
- Node.js y npm.
- Advanced Custom Fields o ACF Pro.
- Un entorno local como WAMP, XAMPP, LocalWP o Docker.

# Instalación

## 1. Clonar el repositorio

Clona el repositorio dentro de la carpeta de temas de WordPress:

```bash
cd wp-content/themes
git clone https://github.com/N1P0STK4/Rodrigo-WordPress-VGS.git
```

También puedes descargar el repositorio como ZIP y extraerlo manualmente dentro de `wp-content/themes/`.

## 2. Instalar y activar los plugins

Antes de activar el tema, instala el plugin propio y ACF.

### 2.1. Instalar el plugin propio

Los plugins personalizados se encuentran en:

```text
/plugins-propios
```

Copia cada carpeta de plugin a la carpeta general de plugins de WordPress:

```text
Origen:
wp-content/themes/theme/plugins-propios/rodri-plugin-vgs/

Destino:
wp-content/plugins/nombre-del-plugin/
```

Después, accede en WordPress a:

```text
Plugins > Plugins instalados
```

Activa el plugin propio. Este plugin registra el Custom Post Type `Productos` utilizado por el tema.

### 2.2. Instalar ACF PRO

Instala y activa **Advanced Custom Fields PRO**

## 3. Activar el tema

Cuando el plugin propio y ACF estén activos, accede a:

```text
Apariencia > Temas
```

Activa el tema:

```text
theme
```

## 4. Instalar las dependencias de Node.js

Abre una terminal en la carpeta raíz del tema:

```bash
cd wp-content/themes
```

Instala las dependencias:

```bash
npm install
```

La carpeta `node_modules` no se incluye en el repositorio y está excluida mediante `.gitignore`.

## 5. Compilar los estilos y scripts

### Desarrollo

```bash
npm run dev
```

### Compilación automática

```bash
npm run watch
```

Este comando permanece activo y vuelve a compilar los recursos cuando detecta cambios. Para detenerlo, utiliza `Ctrl + C`.

# Importación del contenido de demostración

Los archivos de demostración se encuentran en:

```text
theme/demo-content/
```

| Archivo | Descripción |
| --- | --- |
| `acf-export-2026-07-19.json` | Exportación de los grupos de campos de ACF |
| `wordpress_tw.WordPress.2026-07-19 (1).xml` | Exportación del contenido de WordPress y de los productos de prueba |

## 6. Importar el contenido de WordPress

Accede a:

```text
Herramientas > Importar > WordPress
```

Si el importador de WordPress no está instalado, WordPress permitirá instalarlo desde esa misma pantalla.

Selecciona el archivo:

```text
demo-content/wordpress_tw.WordPress.2026-07-19 (1).xml
```

Durante la importación:

1. Asigna el contenido a un usuario existente o crea un usuario nuevo.
2. Marca la opción **Descargar e importar archivos adjuntos**.
3. Ejecuta la importación.
4. Comprueba que se han importado las páginas y los productos.

> [!WARNING]
> El plugin propio debe estar activo antes de importar el XML. De lo contrario, WordPress podría no reconocer correctamente el Custom Post Type `Productos`.

## 7. Importar los campos de ACF

Accede en WordPress a:

```text
ACF > Herramientas
```

Importa el siguiente archivo:

```text
demo-content/acf-export-2026-07-19.json
```

Después de importarlo, comprueba que el grupo de campos está activo y correctamente asignado a la página `Home`.

# Configuración de la página de inicio

## 8. Establecer `Home` como portada

Después de importar el contenido, accede a:

```text
Ajustes > Lectura
```

Configura las opciones de la siguiente manera:

```text
Tu portada muestra: Una página estática
Portada: Home
```

Guarda los cambios.

La página `Home` debe estar seleccionada como portada para mostrar correctamente la maquetación desarrollada.

## 9. Configurar el menú

Accede a:

```text
Apariencia > Menús
```

Selecciona el menú importado o crea uno nuevo y asígnalo a la ubicación registrada por el tema.

## 10. Regenerar los enlaces permanentes

Accede a:

```text
Ajustes > Enlaces permanentes
```

Pulsa **Guardar cambios** sin modificar ninguna opción. Esto regenerará las reglas de WordPress para las páginas y los productos.

# Orden resumido de instalación

1. Clonar el repositorio dentro de `wp-content/themes/`.
2. Copiar los plugins de `plugins-propios/` a `wp-content/plugins/`.
3. Activar el plugin propio.
4. Instalar y activar ACF o ACF Pro.
5. Activar el tema `theme`.
6. Ejecutar `npm install`.
7. Ejecutar `npm run build`, `npm run dev` o `npm run watch`.
8. Importar `acf-export-2026-07-19.json`.
9. Importar `wordpress_tw.WordPress.2026-07-19 (1).xml`.
10. Seleccionar `Home` como página de inicio.
11. Asignar el menú de navegación.
12. Guardar los enlaces permanentes.

# Custom Post Type Productos

El proyecto utiliza un Custom Post Type llamado `Productos`, registrado mediante el plugin propio incluido en `plugins-propios/`.

Cada producto admite:

- Título.
- Descripción.
- Imagen destacada.
- Enlace individual.

La página de inicio muestra los últimos seis productos mediante una consulta personalizada.

La tarjeta reutilizable se encuentra en:

```text
template-parts/product/card.php
```

# Contenido administrable con ACF

El slider principal se gestiona desde la página `Home` mediante campos personalizados de ACF.

Los campos permiten administrar:

- Pretítulo.
- Título.
- Texto del botón.
- URL del botón.
- Imagen del slide.

Para editar el slider:

1. Accede a `Páginas`.
2. Edita la página `Home`.
3. Modifica el grupo de campos del slider.
4. Actualiza la página.

# Archivos generados

Los comandos de npm generan los archivos CSS y JavaScript utilizados por el tema, entre ellos:

```text
theme/style.css
theme/style-editor.css
theme/js/script.min.js
theme/js/block-editor.min.js
```

Estos archivos no deben editarse directamente, ya que se sobrescriben al ejecutar nuevamente los comandos de compilación.

# Archivos excluidos

La carpeta `node_modules` está excluida del repositorio mediante `.gitignore`.

Ejemplo:

```gitignore
node_modules/
.env
.DS_Store
Thumbs.db
*.log
```

# Comprobación final

- [ ] El plugin propio está instalado y activo.
- [ ] ACF o ACF Pro está instalado y activo.
- [ ] El tema `theme` está activo.
- [ ] Se ha ejecutado `npm install`.
- [ ] Los estilos y scripts se han compilado.
- [ ] El archivo JSON de ACF se ha importado.
- [ ] El archivo XML de WordPress se ha importado.
- [ ] Los productos aparecen en el panel de WordPress.
- [ ] La página `Home` está seleccionada como portada.
- [ ] El menú está asignado a su ubicación.
- [ ] Los enlaces permanentes se han regenerado.
- [ ] El diseño funciona correctamente en escritorio y móvil.

# Evidencia visual

El vídeo demostrativo debe tener una duración máxima de **3 minutos** e incluir:

- Navegación por la página desarrollada.
- Funcionamiento de los sliders.
- Visualización de los productos.
- Prueba responsive mediante el inspector del navegador.
- Vista móvil del diseño y del menú.
- Vistazo rápido a la estructura de carpetas.
- Carpetas `plugins-propios/` y `demo-content/`.

**Enlace al vídeo:** [Añadir enlace](#)

# Tecnologías utilizadas

- WordPress.
- PHP.
- Tailwind CSS.
- JavaScript.
- SwiperJS.
- Advanced Custom Fields.
- Node.js.
- npm.
- PostCSS.
- esbuild.
- Git y GitHub.

# Autor

Desarrollado por **Rodrigo** para la prueba técnica de WordPress de **VGS**.