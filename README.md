# SomGrau — WordPress Project

WordPress site using the **SomGrau** child theme (parent: Twenty Twenty-Five).

## Repository structure

```
wp-content/themes/somgrau/
├── style.css          # Theme metadata
├── functions.php      # Enqueues stylesheet, loads xarop.php
├── xarop.php          # All custom features (see below)
└── theme.json         # Block editor design tokens
.github/workflows/
└── deploy.yml         # Auto-deploy to production on push to main
```

Only the theme folder is tracked. WordPress core, plugins, uploads and `wp-config.php` are excluded via `.gitignore`.

## xarop.php features

### Brand
Constants at the top of `xarop.php` control colours and the SVG logo used across all features:
`XAROP_COLOR_PRIMARY`, `XAROP_COLOR_PRIMARY_DARK`, `XAROP_COLOR_BG`, `XAROP_COLOR_TEXT`, `XAROP_LOGO_SVG`.

### Maintenance Mode
**Settings → Maintenance Mode**

| Option | Description |
|---|---|
| Enable | Blocks non-logged-in visitors |
| Page Title | `<h1>` shown on the maintenance page |
| Message | Body text (supports HTML via the block editor) |
| Login Button | Show/hide the login link |
| External URL | Optional URL to use instead of the built-in maintenance page |
| URL Mode | **Redirect** — 302 to the URL (address bar changes) · **Frame** — full-page iframe (address bar stays the same) |
| Redirect Delay | Seconds to wait before redirecting (0 = immediate). Redirect mode only. |

### Login page
- Custom SVG logo (uses `XAROP_LOGO_SVG` and `XAROP_COLOR_PRIMARY`)
- Primary button colour matches the brand
- Logo links to `XAROP_URL`

### Dashboard
- Removes default WordPress widgets
- Adds an xarop.com widget

## Deployment

Pushing to `main` triggers the GitHub Actions workflow [`.github/workflows/deploy.yml`](.github/workflows/deploy.yml), which uploads the theme folder via FTP.

Required repository secrets:

| Secret | Value |
|---|---|
| `FTP_HOST` | FTP server hostname |
| `FTP_USERNAME` | FTP username |
| `FTP_PASSWORD` | FTP password |

The workflow only runs when files inside `wp-content/themes/somgrau/` change.

## Local development

Site managed with [Local by Flywheel](https://localwp.com/). The working directory is `app/public`.
