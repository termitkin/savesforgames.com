<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title><?php wp_title('', true);?> | Saves For Games</title>
<?php wp_head();?>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="google-site-verification" content="eXbFXJXlGto7DsVmYUNTpNBElLIIfDEo1oFhl08jGWg" />
<meta name="yandex-verification" content="3b552121d3f3e932" />
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="preconnect" href="https://www.googletagmanager.com">
<script>
(() => {
    const themeName = localStorage.getItem('theme-name') || 'auto';
    document.documentElement.setAttribute('data-theme-name', themeName);
})();
</script>
<style>
:root {
  --font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";

  --bg-main: #f6f5f2;
  --bg-elevated: #ffffff;
  --bg-header: rgba(255, 255, 255, 0.82);
  --bg-header-solid: #ffffff;
  --bg-chip: rgba(255, 91, 31, 0.08);

  --text-main: #1a1613;
  --text-strong: #0a0a0c;
  --text-muted: #6b6560;
  --text-inverse: #ffffff;

  --border: rgba(20, 20, 24, 0.10);
  --border-strong: rgba(255, 91, 31, 0.35);

  --link: #d94612;
  --link-hover: #ff5b1f;
  --accent: #ff5b1f;
  --accent-strong: #ffd166;
  --accent-glow: rgba(255, 91, 31, 0.28);
  --accent-ring: rgba(255, 91, 31, 0.35);

  --shadow-sm: 0 1px 2px rgba(15, 23, 42, 0.05);
  --shadow-md: 0 8px 24px -12px rgba(15, 23, 42, 0.15);
  --shadow-glow: 0 10px 32px -14px var(--accent-glow);

  --radius-sm: 3px;
  --radius-md: 5px;
  --radius-lg: 6px;
  --radius-pill: 999px;
}

/* AUTO mode: only apply dark tokens when neither explicit theme is set */
@media (prefers-color-scheme: dark) {
  :root:not([data-theme-name='light']):not([data-theme-name='dark']) {
    color-scheme: dark;
    --bg-main: #0a0a0c;
    --bg-elevated: #141418;
    --bg-header: rgba(10, 10, 12, 0.72);
    --bg-header-solid: #0a0a0c;
    --bg-chip: rgba(255, 91, 31, 0.10);

    --text-main: #ece7e1;
    --text-strong: #ffffff;
    --text-muted: #8f8a84;
    --text-inverse: #0a0a0c;

    --border: rgba(255, 255, 255, 0.08);
    --border-strong: rgba(255, 91, 31, 0.45);

    --link: #ffd166;
    --link-hover: #ffe4a3;
    --accent: #ff5b1f;
    --accent-strong: #ffd166;
    --accent-glow: rgba(255, 91, 31, 0.38);
    --accent-ring: rgba(255, 91, 31, 0.5);

    --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.4);
    --shadow-md: 0 8px 24px -12px rgba(0, 0, 0, 0.6);
    --shadow-glow: 0 10px 32px -12px var(--accent-glow);
  }
}

/* Explicit DARK */
:root[data-theme-name='dark'] {
  color-scheme: dark;
  --bg-main: #0a0a0c;
  --bg-elevated: #141418;
  --bg-header: rgba(10, 10, 12, 0.72);
  --bg-header-solid: #0a0a0c;
  --bg-chip: rgba(255, 91, 31, 0.10);

  --text-main: #ece7e1;
  --text-strong: #ffffff;
  --text-muted: #8f8a84;
  --text-inverse: #0a0a0c;

  --border: rgba(255, 255, 255, 0.08);
  --border-strong: rgba(255, 91, 31, 0.45);

  --link: #ffd166;
  --link-hover: #ffe4a3;
  --accent: #ff5b1f;
  --accent-strong: #ffd166;
  --accent-glow: rgba(255, 91, 31, 0.38);
  --accent-ring: rgba(255, 91, 31, 0.5);

  --shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.4);
  --shadow-md: 0 8px 24px -12px rgba(0, 0, 0, 0.6);
  --shadow-glow: 0 10px 32px -12px var(--accent-glow);
}

/* Explicit LIGHT — already default, but declared so it wins over prefers-color-scheme when user forces it */
:root[data-theme-name='light'] {
  color-scheme: light;
}

* { box-sizing: border-box; }
html { height: 100%; }
body {
  margin: 0;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  font-family: var(--font-family);
  background-color: var(--bg-main);
  color: var(--text-main);
  font-size: 15px;
  line-height: 1.55;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body, div, header, aside, footer, input, button, ul, ol, li, p, h1, h2, h3, article {
  margin: 0;
  padding: 0;
}

a { color: var(--link); text-decoration: none; transition: color .15s ease; }
a:hover, a:focus-visible { color: var(--link-hover); text-decoration: underline; }
a:focus-visible, button:focus-visible, input:focus-visible {
  outline: none;
  box-shadow: 0 0 0 3px var(--accent-ring);
  border-radius: var(--radius-sm);
}

/* ===== Header ===== */
.header {
  position: sticky;
  top: 0;
  z-index: 50;
  background-color: var(--bg-header);
  -webkit-backdrop-filter: saturate(180%) blur(14px);
  backdrop-filter: saturate(180%) blur(14px);
  border-bottom: 1px solid transparent;
  transition: border-color .2s ease, background-color .2s ease;
}
.header.is-scrolled {
  border-bottom-color: var(--border);
}
.header__content {
  max-width: 1200px;
  margin: 0 auto;
  padding: 12px 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  align-items: stretch;
}
@media (min-width: 720px) {
  .header__content {
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 10px 24px;
  }
}

.site-logo {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: var(--text-strong);
  font-size: 1.15rem;
  font-weight: 800;
  letter-spacing: -0.01em;
  text-decoration: none;
  transition: color .15s ease, transform .15s ease;
}
.site-logo__icon {
  width: 20px;
  height: 20px;
  color: var(--accent);
  fill: currentColor;
  filter: drop-shadow(0 0 10px var(--accent-glow));
  flex-shrink: 0;
}
.site-logo:hover, .site-logo:focus-visible { color: var(--accent); text-decoration: none; }

/* Search */
.search-form {
  display: flex;
  align-items: center;
  gap: 6px;
  width: 100%;
  max-width: 380px;
  background: var(--bg-elevated);
  border: 1px solid var(--border);
  border-radius: var(--radius-md);
  padding: 4px 4px 4px 14px;
  transition: border-color .15s ease, box-shadow .15s ease;
}
.search-form:hover {
  border-color: var(--border-strong);
  box-shadow: 0 0 0 1px var(--accent-glow);
}
.search-form:focus-within {
  border-color: var(--accent);
  box-shadow: 0 0 0 3px var(--accent-ring);
}
.search-form .input_type_search:focus-visible {
  box-shadow: none;
}
.input_type_search {
  flex: 1;
  min-width: 0;
  border: 0;
  outline: none;
  background: transparent;
  color: var(--text-main);
  font-size: 0.9rem;
  padding: 6px 0;
  font-family: inherit;
}
.input_type_search::placeholder { color: var(--text-muted); }
.submit_type_search {
  border: 0;
  cursor: pointer;
  background: var(--accent);
  color: var(--text-inverse);
  font-weight: 600;
  font-size: 0.85rem;
  padding: 8px 16px;
  border-radius: var(--radius-sm);
  transition: filter .15s ease, transform .05s ease, box-shadow .15s ease;
}
.submit_type_search:hover {
  filter: brightness(1.15);
  box-shadow: 0 6px 18px -6px var(--accent-glow);
}
.submit_type_search:active { transform: translateY(1px); }

/* ===== Layout ===== */
.content-and-sidebar-wrapper {
  flex: 1 0 auto;
  max-width: 1200px;
  margin: 0 auto;
  padding: 28px 20px 48px;
  display: grid;
  grid-template-columns: minmax(0, 1fr);
  gap: 28px;
}
@media (min-width: 960px) {
  .content-and-sidebar-wrapper {
    grid-template-columns: minmax(0, 1fr) 300px;
    gap: 36px;
  }
}

.posts { min-width: 0; display: flex; flex-direction: column; gap: 20px; }

/* ===== Post card ===== */
.post {
  position: relative;
  background: var(--bg-elevated);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 22px 24px;
  color: var(--text-main);
  box-shadow: var(--shadow-sm);
  transition: transform .2s ease, border-color .2s ease, box-shadow .2s ease;
  word-wrap: break-word;
  overflow: hidden;
}
.post::after { content: ""; display: block; clear: both; }
/* Single post: permanent accent border + thick left bar, no hover */
.posts > article.post[role="main"] {
  border-color: var(--border-strong);
  box-shadow: none;
}
.posts > article.post:not([role="main"])::before,
.posts > div.post::before,
.posts > article.post[role="main"]::before {
  content: "";
  position: absolute;
  inset: 0 auto 0 0;
  width: 3px;
  background: var(--accent);
  opacity: 0;
  transition: opacity .15s ease;
}
.posts > article.post:not([role="main"]):hover,
.posts > div.post:hover,
.posts > article.post[role="main"]:hover {
  transform: translateY(-4px);
  border-color: var(--border-strong);
  box-shadow: var(--shadow-md), var(--shadow-glow);
}
.posts > article.post:not([role="main"]):hover::before,
.posts > div.post:hover::before,
.posts > article.post[role="main"]:hover::before { opacity: 1; }
/* Single post overrides */
.posts > article.post[role="main"]:hover {
  transform: none;
  box-shadow: none;
}
.posts > article.post[role="main"]::before {
  opacity: 1;
  width: 4px;
}
.post p { margin: 10px 0; }
.post strong { color: var(--text-strong); }
.post a { color: var(--link); text-decoration: none; }
.post a:hover, .post a:focus-visible { color: var(--link-hover); text-decoration: underline; }

.post img {
  max-width: 100%;
  height: auto;
  border-radius: var(--radius-sm);
  display: block;
}
/* Cover image: natural theme size (500px) everywhere — main and archive/list */
.posts > article.post > img:first-of-type,
.posts > article.post p:first-of-type > img:first-child,
.posts > div.post > img:first-of-type,
.posts > div.post p:first-of-type > img:first-child {
  width: 500px;
  max-width: 100%;
  height: auto;
  margin: 6px 0 18px;
  border-radius: var(--radius-md);
  display: block;
}


.post-heading {
  display: block;
  font-size: 1.35rem;
  font-weight: 700;
  letter-spacing: -0.01em;
  line-height: 1.25;
  margin-bottom: 4px;
}
.post-heading a { color: var(--text-strong); transition: color .15s ease, text-shadow .15s ease; }
.post-heading a:hover, .post-heading a:focus-visible { color: var(--accent); text-decoration: none; text-shadow: 0 0 18px var(--accent-glow); }

/* Read more link becomes a pill */
.posts .post > a[href]:last-child,
.posts .post p > a[href$="#more"] {
  display: inline-block;
  margin-top: 6px;
  padding: 7px 14px;
  border-radius: var(--radius-sm);
  background: var(--bg-chip);
  color: var(--accent);
  font-size: 0.82rem;
  font-weight: 600;
  text-decoration: none;
  border: 1px solid transparent;
  transition: background-color .15s ease, color .15s ease, border-color .15s ease, transform .15s ease;
}
.posts .post > a[href]:last-child:hover,
.posts .post p > a[href$="#more"]:hover {
  background: var(--accent);
  color: var(--text-inverse);
  border-color: var(--accent);
  transform: translateY(-1px);
}

/* ===== Single post ===== */
.posts > article.post {
  /* single-post view */
}
.post-views-label, .post-views-count {
  color: var(--text-muted);
  font-size: 0.78rem;
  display: inline;
}
.you-can-download {
  margin: 18px 0;
  padding: 14px 16px;
  background: var(--bg-chip);
  border: 1px solid var(--border);
  border-radius: var(--radius-md);
  color: var(--text-main);
  font-size: 0.9rem;
  transition: border-color .15s ease, box-shadow .15s ease;
}
.you-can-download:hover { border-color: var(--border-strong); box-shadow: var(--shadow-glow); }

/* ===== Sidebar ===== */
.sidebar {
  min-width: 0;
}
@media (min-width: 960px) {
  .sidebar { position: sticky; top: 84px; align-self: start; }
}
.popular-posts {
  background: var(--bg-elevated);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 18px 18px 20px;
  box-shadow: var(--shadow-sm);
  transition: border-color .15s ease, box-shadow .15s ease;
}
.popular-posts:hover { border-color: var(--border-strong); box-shadow: var(--shadow-md); }
.popular-posts__heading {
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: var(--text-muted);
  margin-bottom: 12px;
}
.popular-posts__list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 2px;
}
.popular-posts__list li a {
  display: block;
  padding: 8px 10px;
  border-radius: var(--radius-sm);
  color: var(--text-main);
  font-size: 0.88rem;
  border-left: 2px solid transparent;
  transition: background-color .15s ease, color .15s ease, border-color .15s ease, padding-left .15s ease;
  text-decoration: none;
}
.popular-posts__list li a:hover,
.popular-posts__list li a:focus-visible {
  background: var(--bg-chip);
  color: var(--accent);
  border-left-color: var(--accent);
  padding-left: 10px;
  text-decoration: none;
}

/* ===== Links ===== */
.link {
  color: var(--link);
  text-decoration: none;
  font-size: 0.88rem;
}
.link:hover, .link:focus-visible { color: var(--link-hover); text-decoration: underline; }
.link_size_big { font-size: 1.05rem; font-weight: 600; }
.link_color_white { color: var(--text-main); }

/* ===== Pagination ===== */
.pagination {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
  margin-top: 24px;
  justify-content: center;
}
@media (min-width: 720px) { .pagination { justify-content: flex-start; } }
.page-numbers {
  min-width: 38px;
  height: 38px;
  padding: 0 12px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: var(--bg-elevated);
  border: 1px solid var(--border);
  border-radius: var(--radius-sm);
  color: var(--text-main);
  font-size: 0.88rem;
  font-weight: 500;
  text-decoration: none;
  transition: all .15s ease;
}
.page-numbers:hover, .page-numbers:focus-visible {
  border-color: var(--accent);
  color: var(--accent);
  box-shadow: 0 0 0 2px var(--accent-glow);
  transform: translateY(-1px);
}
.page-numbers.current {
  background: var(--accent);
  border-color: var(--accent);
  color: var(--text-inverse);
}
.page-numbers.dots { border: 0; background: transparent; color: var(--text-muted); }

/* ===== Not found ===== */
.not-found-posts {
  padding: 40px 24px;
  text-align: center;
  background: var(--bg-elevated);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
}
.not-found-posts__heading { font-size: 1.25rem; margin-bottom: 6px; color: var(--text-strong); }
.not-found-posts__text { color: var(--text-muted); }

/* ===== Comments ===== */
.google-ads-and-comments-wrapper { margin-top: 32px; }
.leave-a-comment {
  font-size: 1.05rem;
  font-weight: 700;
  color: var(--text-strong);
  margin-bottom: 14px;
}
.comments-title, .comment-reply-title {
  font-size: 1rem;
  font-weight: 600;
  color: var(--text-strong);
  margin: 18px 0 10px;
}
.comment-list, .children { list-style: none; padding: 0; margin: 0; }
.comment { margin-top: 14px; }
.comment-body {
  padding: 14px 16px;
  background: var(--bg-elevated);
  border: 1px solid var(--border);
  border-radius: var(--radius-md);
  outline: none;
  color: var(--text-main);
  font-size: 0.9rem;
}
.comment-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  justify-content: space-between;
  align-items: center;
  background: transparent;
  color: var(--text-muted);
  padding: 0 0 8px;
  border-bottom: 1px dashed var(--border);
  margin-bottom: 10px;
  border-radius: 0;
  font-size: 0.82rem;
}
.comment-author, .fn { color: var(--accent); font-weight: 600; font-style: normal; }
.comment-metadata a { color: var(--text-muted); text-decoration: none; }
.comment-metadata a:hover { color: var(--text-main); }
.comment-content { word-wrap: break-word; }
.children { padding-left: 20px; margin-top: 14px; border-left: 2px solid var(--border); }
@media (min-width: 720px) { .children { padding-left: 28px; } }

.comment-reply-link {
  display: inline-block;
  margin-top: 8px;
  padding: 4px 10px;
  font-size: 0.78rem;
  font-weight: 600;
  color: var(--accent);
  background: var(--bg-chip);
  border-radius: var(--radius-sm);
  text-decoration: none;
  transition: background-color .15s ease, color .15s ease;
}
.comment-reply-link:hover { background: var(--accent); color: var(--text-inverse); text-decoration: none; }

/* ===== Comment form / inputs ===== */
.comment-form { display: flex; flex-direction: column; gap: 12px; margin-top: 12px; }
.comment-form-comment, .comment-form-author, .comment-form-email, .comment-form-url {
  display: flex; flex-direction: column; gap: 6px;
  color: var(--text-main);
  font-size: 0.85rem;
}
.comment-notes { display: none; }
.input:not(.input_type_search), #author, #email, #url, #comment {
  width: 100%;
  padding: 10px 12px;
  background: var(--bg-elevated);
  color: var(--text-main);
  border: 1px solid var(--border);
  border-radius: var(--radius-sm);
  font-size: 0.9rem;
  font-family: inherit;
  transition: border-color .15s ease, box-shadow .15s ease;
}
.input:not(.input_type_search):focus, #author:focus, #email:focus, #url:focus, #comment:focus {
  outline: none;
  border-color: var(--accent);
  box-shadow: 0 0 0 3px var(--accent-ring);
}
#comment { min-height: 120px; resize: vertical; }
.submit:not(.submit_type_search) {
  align-self: flex-start;
  padding: 10px 20px;
  background: var(--accent);
  color: var(--text-inverse);
  font-weight: 600;
  font-size: 0.88rem;
  border: 0;
  border-radius: var(--radius-sm);
  cursor: pointer;
  transition: filter .15s ease, transform .15s ease, box-shadow .15s ease;
}
.submit:not(.submit_type_search):hover, .submit:not(.submit_type_search):focus-visible {
  filter: brightness(1.15);
  transform: translateY(-1px);
  box-shadow: 0 6px 18px -6px var(--accent-glow);
}
.submit:not(.submit_type_search):active { transform: translateY(1px); }

/* ===== Footer ===== */
.footer {
  margin-top: auto;
  flex-shrink: 0;
  padding: 20px;
  background: var(--bg-elevated);
  border-top: 1px solid var(--border);
  color: var(--text-muted);
  font-size: 0.85rem;
}
.footer__inner {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 16px;
  align-items: center;
  justify-content: space-between;
}
@media (min-width: 720px) { .footer__inner { flex-direction: row; } }
.footer__content { display: flex; flex-wrap: wrap; gap: 16px; align-items: center; }
.footer__text { color: var(--text-muted); }
.link_color_white { color: var(--text-main); }
.link_color_white:hover { color: var(--accent); }

/* ===== Theme switcher (segmented pill, 3 states) ===== */
.theme-switchers {
  display: inline-flex;
  align-items: center;
  gap: 2px;
  padding: 3px;
  background: var(--bg-main);
  border: 1px solid var(--border);
  border-radius: var(--radius-sm);
}
.theme-switcher {
  width: 32px;
  height: 32px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: transparent;
  color: var(--text-muted);
  border: 0;
  border-radius: 3px;
  cursor: pointer;
  transition: background-color .15s ease, color .15s ease;
}
.theme-switcher:hover { color: var(--text-main); background: var(--bg-chip); }
.theme-switcher[aria-current="true"] {
  background: var(--accent);
  color: var(--text-inverse);
  box-shadow: 0 4px 14px -4px var(--accent-glow);
}
.theme-switcher svg { fill: currentColor; width: 18px; height: 18px; }
</style>
</head>
<body>
  <header class="header" id="siteHeader">
    <div class="header__content">
      <a class="site-logo" href="/" title="Home page">
        <svg class="site-logo__icon" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
          <path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.11 0 2-.9 2-2V7l-4-4zm-5 16c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-10H5V5h10v4z" fill="currentColor"/>
        </svg>
        SavesForGames.Com
      </a>
      <form role="search" class="search-form" id="searchform" action="//savesforgames.com/" method="get">
        <input class="input input_type_search" aria-label="Enter here title of a game to find a savegame" name="s" type="text" placeholder="Find a savegame..">
        <button class="submit submit_type_search" aria-label="Search button" id="searchsubmit" type="submit">Search</button>
      </form>
    </div>
  </header>
  <script>
  (() => {
    const header = document.getElementById('siteHeader');
    if (!header) return;
    const onScroll = () => {
      if (window.scrollY > 4) header.classList.add('is-scrolled');
      else header.classList.remove('is-scrolled');
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  })();
  </script>