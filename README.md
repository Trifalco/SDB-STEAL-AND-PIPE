# SDB Steel & Pipe WordPress Theme

Un tema personalizado de WordPress diseñado específicamente para SDB Steel & Pipe, replicando el diseño y funcionalidad de su sitio web oficial.

## Características

### 🎨 Diseño Moderno
- Diseño responsive y moderno
- Paleta de colores profesional (naranja #ff7800, azul #1e3a8a)
- Tipografía clara y legible
- Animaciones suaves y efectos hover

### 📱 Responsive Design
- Totalmente responsive para todos los dispositivos
- Navegación móvil optimizada
- Imágenes adaptativas
- Layout flexible con Bootstrap 5

### 🚀 Funcionalidades
- Header fijo con navegación completa
- Hero section con llamadas a la acción
- Secciones de productos (OCTG, Midstream, PVF)
- Formulario de contacto funcional
- Newsletter subscription
- Blog integrado
- Sidebar con widgets
- Footer completo con información de contacto

### 🛠️ Tecnologías Utilizadas
- WordPress 5.0+
- Bootstrap 5.3.2
- jQuery
- Font Awesome 6.4.0
- CSS3 con variables personalizadas
- JavaScript ES6+

## Instalación

1. **Subir el tema:**
   - Copia la carpeta `sdbsteel-theme` a `/wp-content/themes/`
   - O comprime la carpeta y súbela desde el panel de administración

2. **Activar el tema:**
   - Ve a Apariencia > Temas en WordPress
   - Activa "SDB Steel and Pipe"

3. **Configurar menús:**
   - Ve a Apariencia > Menús
   - Crea un menú principal y asígnalo a "Primary Menu"

4. **Configurar widgets:**
   - Ve a Apariencia > Widgets
   - Añade widgets al área "Sidebar"

## Estructura de Archivos

```
sdbsteel-theme/
├── assets/
│   ├── css/
│   │   └── style.css          # Estilos principales
│   ├── js/
│   │   └── main.js           # JavaScript personalizado
│   └── images/
│       ├── logo.png          # Logo de la empresa
│       └── about-us.jpg      # Imagen de la sección About
├── front-page.php            # Página principal
├── header.php               # Header del sitio
├── footer.php               # Footer del sitio
├── index.php                # Template de blog
├── sidebar.php              # Sidebar
├── functions.php            # Funciones del tema
└── README.md               # Este archivo
```

## Personalización

### Colores
Los colores principales están definidos como variables CSS en `assets/css/style.css`:

```css
:root {
  --primary-color: #ff7800;    /* Naranja principal */
  --secondary-color: #1e3a8a;  /* Azul secundario */
  --dark-color: #1f2937;       /* Gris oscuro */
  --light-color: #f8f9fa;      /* Gris claro */
  --text-color: #333;          /* Color de texto */
  --white: #ffffff;            /* Blanco */
}
```

### Contenido
- **Página Principal:** Edita `front-page.php` para modificar las secciones
- **Header:** Modifica `header.php` para cambiar la navegación
- **Footer:** Edita `footer.php` para actualizar información de contacto
- **Estilos:** Personaliza `assets/css/style.css`

### Funcionalidades JavaScript
El archivo `assets/js/main.js` incluye:
- Scroll to top
- Navegación suave
- Animaciones al hacer scroll
- Validación de formularios
- Lazy loading de imágenes
- Efectos parallax

## Secciones de la Página Principal

1. **Hero Section**
   - Título principal y subtítulo
   - Características destacadas
   - Botón de llamada a la acción

2. **Our Offerings**
   - OCTG Products
   - Midstream Products
   - PVF Products

3. **About Us**
   - Información de la empresa
   - Imagen representativa

4. **Service-Oriented Mindset**
   - Descripción de servicios
   - Tarjetas de servicios

5. **Team Section**
   - Información sobre el equipo
   - Valores de la empresa

6. **Contact Information**
   - Dirección, teléfono, email
   - Horarios de trabajo

7. **Newsletter**
   - Formulario de suscripción

8. **Resources**
   - Enlaces a recursos de precios

## Páginas Adicionales Recomendadas

Para completar el sitio, considera crear estas páginas:

- **About Us** (`page-about.php`)
- **OCTG** (`page-octg.php`)
- **Midstream** (`page-midstream.php`)
- **PVF** (`page-pvf.php`)
- **Locations** (`page-locations.php`)
- **Resources** (`page-resources.php`)
- **Contact** (`page-contact.php`)

## Soporte

Para soporte técnico o personalizaciones adicionales, contacta al equipo de desarrollo.

## Licencia

Este tema está bajo la Licencia GNU General Public License v2 o posterior.

## Créditos

- Diseño basado en [SDB Steel & Pipe](https://sdbsteelandpipe.com)
- Desarrollado con WordPress
- Utiliza Bootstrap 5 para el framework CSS
- Iconos de Font Awesome 