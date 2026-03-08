# Darcula ACP Theme for phpBB

A dark theme for the phpBB Admin Control Panel, inspired by the [JetBrains IntelliJ IDEA Darcula](https://www.jetbrains.com/help/idea/user-interface-themes.html) color scheme.

## Features

- Full dark theme for the entire phpBB ACP
- Faithful Darcula color palette (#2B2B2B background, #A9B7C6 text, #CC7832 accents)
- Styled tabs, sidebar menu, tables, forms, buttons, alerts, pagination, and permissions interface
- Darcula-style syntax highlighting for code blocks
- Custom dark scrollbars (WebKit and Firefox)
- Responsive design support
- phpBB logo automatically adapted for dark background

## Requirements

- phpBB >= 3.3.0
- PHP >= 7.4.0

## Installation

1. Copy the `avathar/darcula` folder to `ext/avathar/darcula` in your phpBB installation
2. Go to ACP > Customise > Manage extensions
3. Find **Darcula ACP Theme** and click **Enable**

## Building from SASS

The CSS is compiled from SCSS source files in `styles/scss/`.

```bash
cd ext/avathar/darcula/styles
npx sass scss/darcula.scss darcula.css --style=expanded --no-source-map
```

### SCSS structure

| File | Purpose |
|------|---------|
| `_variables.scss` | All Darcula color tokens and design constants |
| `_base.scss` | HTML/body, links, headings, code |
| `_layout.scss` | Header, footer, main panel, sidebar, logo |
| `_tabs.scss` | Tab navigation |
| `_menu.scss` | Sidebar menu |
| `_tables.scss` | Tables, row striping, zebra tables |
| `_forms.scss` | Inputs, buttons, fieldsets, legends, labels |
| `_alerts.scss` | Success/error/warning boxes, popups, tooltips |
| `_pagination.scss` | Pagination controls |
| `_permissions.scss` | Permission interface |
| `_syntax.scss` | PHP syntax highlighting |
| `_scrollbar.scss` | Custom scrollbars |

## Color palette

| Element | Color | Hex |
|---------|-------|-----|
| Background | Dark charcoal | `#2B2B2B` |
| Panels | Tool window gray | `#3C3F41` |
| Text | Blue-gray | `#A9B7C6` |
| Headings | Annotation yellow | `#FFC66D` |
| Keywords / legends | Orange | `#CC7832` |
| Links | Number blue | `#6897BB` |
| Strings / success | Green | `#6A8759` |
| Error | Red | `#FF6B68` |
| Primary buttons | IntelliJ blue | `#365880` |

## License

GPL-2.0-only

## Author

Andreas Vandenberghe (Sajaki) — [avathar.be](https://www.avathar.be)
