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
  --font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

  --bg-main: #fff;
  --bg-secondary: #eb0000;
  --text-main: #444;
  --light-yellow: #ffc;
  --link: var(--bg-secondary);

  --pagination-default: var(--bg-secondary);
  --pagination-active: #ffa500;
  --pagination-hovered: #ed8000;

  --search-button-bg: #fff;
  --search-input-bg: #fff;

  --logo-color-default: #fff;
  --logo-color-hovered: var(--light-yellow);

  --post-comment-button-bg: var(--bg-secondary);
  --post-comment-button-color: #fff;

  --theme-switcher-bg: var(--pagination-hovered);
}
@media (prefers-color-scheme: dark) {
    :root:not([data-theme-name='light']) {
      --bg-main: #161f2b;
      --bg-secondary: #293645;
      --text-main: #ddd;
      --light-yellow: #ffc;
      --link: #00cfff;

      --pagination-default: var(--bg-secondary);
      --pagination-active: #ffa500;
      --pagination-hovered: #ed8000;

      --search-button-bg: var(--bg-main);
      --search-input-bg: var(--bg-main);

      --logo-color-default: #fff;
      --logo-color-hovered: var(--link);

      --post-comment-button-bg: var(--bg-secondary);
      --post-comment-button-color: #fff;

      --theme-switcher-bg: var(--pagination-hovered);
    }
}
:root[data-theme-name='dark'] {
  --bg-main: #161f2b;
  --bg-secondary: #293645;
  --text-main: #ddd;
  --light-yellow: #ffc;
  --link: #00cfff;

  --pagination-default: var(--bg-secondary);
  --pagination-active: #ffa500;
  --pagination-hovered: #ed8000;

  --search-button-bg: var(--bg-main);
  --search-input-bg: var(--bg-main);

  --logo-color-default: #fff;
  --logo-color-hovered: var(--link);

  --post-comment-button-bg: var(--bg-secondary);
  --post-comment-button-color: #fff;

  --theme-switcher-bg: var(--pagination-hovered);
}

html {
  height: 100%;
}
body {
	height: calc(100% - 50px);
  font-family: var(--font-family);
  background-color: var(--bg-main);
}
body, div, header, aside, footer, input, button, ul {
  margin: 0;
  padding: 0;
}
.header {
  background-color: var(--bg-secondary);
  min-height: 40px;
  display: flex;
  justify-content: center;
}
.header__content {
  width: 100%;
  height: 80px;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
}
@media screen and (min-width: 576px) {
  .header__content {
    width: 780px;
    height: 40px;
    padding: 0 15px;
    flex-direction: row;
    justify-content: space-between;
  }
}
.search-form {
  width: 260px;
  height: 30px;
  display: flex;
  gap: 2px;
  flex-direction: row;
  justify-content: flex-end;
  align-items: center;
}
.site-logo {
  color: var(--logo-color-default);
  font-size: 1.2rem;
  font-weight: 700;
  text-decoration: none;
  transition: color 0.25s;
}
.site-logo:focus,
.site-logo:hover {
  color: var(--logo-color-hovered);
  text-decoration: none;
}
.content-and-sidebar-wrapper {
  min-height: calc(100% - 266px);
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding: 0 15px;
}
@media screen and (min-width: 576px) {
  .content-and-sidebar-wrapper {
    min-height: calc(100% - 174px);
  }
}
@media screen and (min-width: 992px) {
  .content-and-sidebar-wrapper {
    flex-direction: row;
    justify-content: space-between;
  }
}
.post {
  width: 100%;
  max-width: 500px;
  margin-top: 10px;
  color: var(--text-main);
  font-size: 0.8125rem;
  line-height: 1.4;
  word-wrap: break-word;
}
.post p {
  margin: 13px 0;
}
.post strong {
  color: var(--text-main);
}
.post a {
  color: var(--link);
}
.post a:hover,
.post a:focus {
  text-decoration: none;
}
.post img {
  width: 100%;
  max-width: 500px;
  height: auto;
}
.posts {
  width: 100%;
  min-height: 100%;
  max-width: 500px;
  margin: 0 auto;
}
@media screen and (min-width: 992px) {
  .posts {
    margin: 0;
  }
}
.sidebar {
  width: 100%;
  display: flex;
  flex-direction: column;
  max-width: 260px;
  overflow-x: hidden;
  margin: 0 auto;
}
@media screen and (min-width: 992px) {
  .sidebar {
    margin: 0;
  }
}
.post-heading {
  display: inline;
  font-size: 1.125rem;
  color: var(--link);
  font-weight: 400;
}
.popular-posts {
  display: block;
}
.popular-posts__heading {
  margin: 12px 0 3px 0;
  font-size: 1.125rem;
  color: var(--link);
}
.popular-posts__list {
  max-width: 260px;
  list-style-type: none;
  font-size: 0.75rem;
  line-height: 1.5;
  display: flex;
  flex-direction: column;
  gap: 0.25rem;
  margin-top: 0.5rem;
}
.link,
.logged-in-as a,
.comment-reply-link,
.comment-reply-title a {
  text-decoration: underline;
  color: var(--link);
  font-size: 0.8125rem;
  font-weight: 400;
}
.link:hover,
.link:focus,
.logged-in-as a:hover,
.logged-in-as a:focus,
.comment-reply-title a:hover,
.comment-reply-title a:focus,
.comment-reply-link:hover,
.comment-reply-link:focus {
  text-decoration: none;
}
.link_size_big {
  font-size: 1.125rem;
}
.link_color_white {
  color: #fff;
}
.footer {
  padding: 15px;
  background-color: var(--bg-secondary);
  color: #fff;
  margin-top: 20px;
  font-size: 0.875rem;
  display: flex;
  justify-content: center;
  box-sizing: border-box;
}
@media screen and (min-width: 576px) {
  .footer {
    padding: 7px 15px;
  }
}
.footer__inner {
  width: 100%;
  max-width: 780px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
}
@media screen and (min-width: 576px) {
  .footer__inner {
    flex-direction: row;
    justify-content: space-between;
  }
}
.footer__content {
  min-height: 36px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
}
@media screen and (min-width: 576px) {
  .footer__content_align_left {
    align-items: flex-start;
  }
  .footer__content_align_right {
    align-items: flex-end;
  }
}
.pagination {
  width: 100%;
  max-width: 500px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
@media screen and (min-width: 576px) {
  .pagination {
    justify-content: flex-start;
  }
}
.page-numbers {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 4px 0 0;
  padding: 7px 7px 5px 7px;
  background-color: var(--pagination-default);
  color: #fff;
  text-decoration: none;
  transition: background-color 0.25s;
}
.page-numbers:hover,
.page-numbers:focus {
  background-color: var(--pagination-hovered);
}
.dots:hover,
.dots:focus {
  background-color: var(--bg-secondary);
}
.current,
.current:hover,
.current:focus {
  background-color: var(--pagination-active);
}
.google-ads-and-comments-wrapper {
  width: 100%;
  max-width: 500px;
  min-height: 307px;
}
.social-network-like-buttons {
  max-width: 500px;
  height: 20px;
  margin-top: 10px;
}
.leave-a-comment {
  max-width: 500px;
  margin: 10px 0;
  font-size: 1.125rem;
  font-weight: 700;
  color: var(--link);
}
.fb-comments {
  min-height: 180px;
}
.post-views-label,
.post-views-count {
  color: var(--text-main);
  font-size: 0.75rem;
  display: inline;
}
.you-can-download {
  width: 100%;
  max-width: 500px;
  margin-bottom: 14px;
  font-family: var(--font-family);
  color: var(--text-main);
}
.comment-list,
.children {
  padding: 0;
  margin: 0;
  list-style-type: none;
}
.comment-list,
.comment-body,
.comments-title,
.comment-reply-title {
  color: var(--text-main);
  font-size: 0.875rem;
}
.comment-body {
  padding: 10px;
  outline: 1px dashed var(--link);
  background-color: var(--bg-main);
  border-radius: 5px;
}
.comment-meta {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  background-color: var(--bg-secondary);
  color: #fff;
  padding: 5px;
  border-radius: 5px;
}
.comment-metadata {
  display: flex;
}
.comment-metadata a {
  color: #fff;
  text-decoration: underline;
}
.comment-metadata a:hover {
  color: #fff;
  text-decoration: none;
}
.edit-link {
  margin-left: auto;
}
.comment {
  margin-top: 15px;
}
.comment-content {
  word-wrap: break-word;
}
.children {
  width: 95%;
  margin-left: auto;
}
.comment-form,
.comment-notes,
.comment-form-comment,
.comment-form-author {
  display: flex;
  flex-direction: column;
  margin: 0 0 15px 0;
  font-size: 1rem;
  line-height: 1rem;
  color: var(--text-main);
}
.comment-form-comment,
.comment-form-author {
  font-size: 0.875rem;
  align-items: flex-start;
}
.comment-notes {
  display: none;
}
.input,
#author,
#comment {
  width: 100%;
  max-width: 500px;
  height: 30px;
  border-radius: 3px;
  border: 1px solid var(--link);
  margin: 0;
  padding: 7px;
  background-color: var(--bg-main);
  transition: background-color 0.25s;
  box-sizing: border-box;
  color: var(--text-main);
  font-size: 0.875rem;
  line-height: 0.875rem;
}
#author,
#comment {
  margin-top: 5px;
}
#comment {
  min-width: 100%;
  max-width: 100%;
}
.input_type_search {
  border: none;
  border-radius: 3px 0 0 3px;
  font-size: 0.83125rem;
  line-height: 0.83125rem;
  background-color: var(--search-input-bg);
}
.submit {
  min-height: 30px;
  background-color: var(--post-comment-button-bg);
  color: var(--post-comment-button-color);
  border: unset;
  border-radius: 3px 3px 3px 3px;
  cursor: pointer;
  padding: 7px;
  font-size: 0.83125rem;
  line-height: 0.83125rem;
  transition: background-color 0.25s;
}
.submit:hover,
.submit:focus {
  background-color: var(--post-comment-button-bg);
  color: var(--post-comment-button-color);
}
.submit_type_search {
  height: 30px;
  border: 0;
  border-radius: 0 3px 3px 0;
  background-color: var(--search-button-bg);
  color: var(--text-main);
  font-size: 0.83125rem;
  line-height: 0.83125rem;
}
#comment {
  min-height: 100px;
}
.not-found-posts {
  display: flex;
  flex-direction: column;
}
.not-found-posts__heading {
  color: var(--text-main);
  font-size: 1.125rem;
  margin: 10px 0;
}
.not-found-posts__text {
  color: var(--text-main);
  font-size: 0.875rem;
  margin: 0;
}
.theme-switchers {
    display: flex;
    margin: 0.75rem 0;
    align-items: center;
    gap: 0.5rem;
}
@media screen and (min-width: 576px) {
    .theme-switchers {
        margin: 0 1rem 0 auto;
    }
}
.theme-switcher {
    width: 36px;
    height: 36px;
    background-color: transparent;
    border: unset;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.15s;
}
.theme-switcher:hover {
    cursor: pointer;
    background-color: var(--theme-switcher-bg);
}
.theme-switcher svg {
    fill: currentColor;
}
</style>
</head>
<body>
  <header class="header">
    <div class="header__content">
      <a class="site-logo" href="/" title="Home page">SavesForGames.Com</a>
      <form role="search" class="search-form" id="searchform" action="//savesforgames.com/" method="get">
        <input class="input input_type_search" aria-label="Enter here title of a game to find a savegame" name="s" type="text" placeholder="Find a savegame..">
        <button class="submit submit_type_search" aria-label="Search button" id="searchsubmit" type="submit">Search</button>
      </form>
    </div>
  </header>
