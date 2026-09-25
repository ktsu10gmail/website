# WordPress Setup Plan

The marketing site should run as a WordPress site so content and images can be
edited through the WordPress admin UI. The Git repository should track the
custom Jetta theme and project documentation, not uploaded media or generated
WordPress core files.

## Current Server Finding

As of 2026-09-25, this server exposes `nginx`, but PHP, WP-CLI, and MySQL/MariaDB
were not available from the shell PATH during setup.

## Recommended Runtime

- nginx
- PHP 8.2+ with PHP-FPM
- MariaDB or MySQL
- WordPress 6.5+
- WP-CLI
- Custom block theme: `wp-content/themes/jetta`

## Content Model

Use editable WordPress pages for:

- Home
- For Coaches
- How Jetta Works
- Student Experience
- Learning Reports
- Contact / Request Demo

Keep pricing, testimonials, partnerships, improvement percentages, and final
coach/student account limits unpublished until the owner confirms them.

## Git Policy

Track:

- `wp-content/themes/jetta/**`
- `docs/**`
- `CODEX_CONTEXT.md`
- `README.md`

Do not track:

- WordPress core files
- `wp-config.php`
- uploaded media
- cache files
- database dumps
- secrets

