# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project

Classic WordPress theme (`savesforgames-v4-bem`, style.css) for savesforgames.com — a game-savegame download site. No build tooling, no package.json, no bundler: plain PHP + inline CSS/JS. BEM naming convention for classes.

## Environment constraints

PHP is not installed in the development environment — the site cannot be run, built, or linted locally. There is no test suite. Work is limited to reading and editing PHP/CSS/JS files directly; verify changes by inspection, not by execution.

There is no autodeploy. Shipping a change means committing and pushing to `master` directly.

## Architecture

Standard WordPress template hierarchy, no custom post types or a `template-parts` layout:

- `header.php` — opens `<html>`, contains the entire inline `<style>` block (all theme CSS lives here as CSS custom properties under `:root`, not in `style.css`) and the sticky header/search markup. `style.css` itself only carries the theme metadata header (Theme Name/URI/Version) required by WordPress — it is not the active stylesheet.
- `footer.php` — footer markup, the 3-state (light/dark/auto) theme switcher and its inline script (persists to `localStorage['theme-name']`, toggled via `data-theme-name` on `<html>`), and Google Analytics (gtag) snippet.
- `index.php` — post loop/archive view with pagination (`paginate_links`).
- `single.php` — single post view. Reads a custom post meta field keyed `'1'` to conditionally render a "download trainers" link pointing at the sister site `trainersforgames.com`; then renders `comments.php` via `comments_template()`.
- `sidebar.php` — hardcoded "Most Popular Savegames" link list (not dynamic/widget-driven).
- `comments.php` — standard `wp_list_comments()` / `comment_form()` wiring.
- `404.php` / `404-error/404.jpg` — custom not-found page and its image asset.
- `functions.php` — theme setup: strips WP `<head>` cruft (RSD, generator tag, emoji scripts, oEmbed, dashicons, dns-prefetch), adds a canonical `<link>`, customizes the AMP `NewsArticle` metadata, dequeues the Post Views Counter plugin's CSS, moves jQuery to the footer, allows `.rar` uploads, strips the URL/email fields from the comment form, and reformats comment timestamps as relative ("X ago").

Dark/light/auto theming is done entirely with CSS custom properties defined in `header.php`'s inline `<style>` (light values on `:root`, dark overrides under both `prefers-color-scheme: dark` and `[data-theme-name='dark']`) — there is no separate dark-mode stylesheet.

The site has a companion site, `trainersforgames.com`, linked from the footer and from the single-post "download trainers" block.
