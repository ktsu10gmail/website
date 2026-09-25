# WordPress Setup Plan

The marketing site should run as a WordPress site so content and images can be
edited through the WordPress admin UI. The Git repository should track the
custom Jetta theme and project documentation, not uploaded media or generated
WordPress core files.

## Current Server Status

As of 2026-09-25, the WordPress runtime is installed and active:

- nginx 1.24
- PHP 8.3 FPM
- MariaDB 10.11
- WP-CLI 2.12
- WordPress installed in `/home/ksu/www`
- Custom theme `jetta` activated

The document root remains `/home/ksu/www`. nginx runs as `www-data`, so
`www-data` has execute-only ACL traversal access on `/home/ksu`.

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

## npm Proxy

The local network has an npm proxy host at `192.168.1.35`. The expected npm
registry URL is:

``` text
http://192.168.1.35:80/
```

As of 2026-09-25, direct checks from this web server to that URL timed out, so
the project does not enable a live `.npmrc` yet.

Do not commit credentials or tokens. If the registry is unauthenticated, create a
project-local `.npmrc` from `.npmrc.example`. If authentication is required,
store the token outside Git.
