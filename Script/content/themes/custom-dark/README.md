custom-dark theme

This folder is a customized dark variant of the default Sngine theme.

Purpose:
- Provide a modern dark UI with updated colors, rounded cards, and updated icon color rules.

Files of interest:
- css/dark-overrides.css  — central overrides and CSS variables for dark mode.
- templates/_head.tpl     — loads the main style and the dark overrides.

How to enable:
- In the admin panel set the site theme to `custom-dark`, or set `$system['theme'] = 'custom-dark'` in configuration.
- Optionally add the `theme-custom-dark` class to <body> if you need to force styles on specific pages.

Notes:
- This is a minimal starting point. For full dark experience, review and adjust component-specific styles in `css/style.css` or add more override files.
- Consider adding dark-specific icons in `images/` and updating `_svg_icons.tpl` if you need custom SVGs.
