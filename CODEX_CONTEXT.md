# Jetta Marketing Website - Codex Context

This repository is the public marketing website for Jetta:

- Production URL: https://www.jetta.com
- Website repository: git@github.com:ktsu10gmail/website.git
- Local website path: /home/ksu/www
- Branch: main
- Remote: origin
- Platform: WordPress with a custom block theme

The production Jetta application is separate:

- Application URL: https://golfgame.jetta.com
- Application repository: github.com/ktsu10gmail/golfgame
- Application branch: main

## Working Rule

Before changing marketing copy that describes product behavior, inspect the
current application repository. The marketing site may explain verified app
features and approved roadmap statements, but must not invent shipped
functionality, pricing, customer counts, testimonials, partnerships, or AI
capabilities.

The marketing website must stay operationally separate from the app. Do not
connect this website directly to the production database, copy app secrets,
mount app filesystems, or create hidden dependencies on the app server.

## App Verification Workflow

1. Check the latest app repository state from `ktsu10gmail/golfgame` on `main`.
2. Review relevant app docs/code before making feature claims.
3. Record the app commit SHA used for verification in `docs/app-sync-log.md`.
4. Write public copy conservatively:
   - shipped feature: "Jetta lets golfers..."
   - beta feature: "Jetta is testing..."
   - planned feature: "Planned..."
   - uncertain feature: do not publish
5. Link users to https://golfgame.jetta.com for the application experience.

## WordPress Development Rule

WordPress should own editable page content, images, navigation, and future
template adjustments through the admin UI. Git should own the custom theme,
documentation, and repeatable setup notes.

Track the custom theme in `wp-content/themes/jetta`. Do not commit WordPress
core, `wp-config.php`, uploaded media, cache files, database dumps, or secrets.

## Core Product Story

Jetta extends golf coaching beyond the lesson. It connects coach instruction,
student practice/play, Jetta analysis, learning reports, and the next coaching
conversation.

Central concept:

> Decision quality is separate from execution quality and result.

Jetta should be positioned as a coach-led learning platform, not as a coach
replacement, generic scorecard, booking app, or unverified AI swing analyzer.
