<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title><?php wp_title('', true);?> | Saves For Games</title>
<?php wp_head();?>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="google-site-verification" content="eXbFXJXlGto7DsVmYUNTpNBElLIIfDEo1oFhl08jGWg" />
<meta name="yandex-verification" content="3b552121d3f3e932" />
<meta property="fb:admins" content="100001912999823"/>
<meta property="fb:app_id" content="289423404490301" />
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="preconnect" href="https://pagead2.googlesyndication.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://www.facebook.com">
<link rel="preconnect" href="https://connect.facebook.net">
<link rel="preconnect" href="https://static.xx.fbcdn.net">
<link rel="preconnect" href="https://googleads.g.doubleclick.net">
<link rel="preconnect" href="https://adservice.google.com">
<style>
body, div, header, aside, footer, input, button, ul {
  margin: 0;
  padding: 0;
}
.google-ads-in-header {
  width: 100%;
  max-width: 728px;
  margin: 20px auto 0 auto;
}
@media screen and (min-width: 992px) {
  .google-ads-in-header {
    width: 728px;
  }
}
.header {
  background-color: #eb0000;
  height: 80px;
  display: flex;
  justify-content: center;
}
@media screen and (min-width: 576px) {
  .header {
    height: 40px;
  }
}
.header__content {
  width: 100%;
  height: 80px;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  font-family: sans-serif;
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
  flex-direction: row;
  justify-content: flex-end;
  align-items: center;
}
.search-form__input {
  width: 200px;
  height: 30px;
  border-radius: 3px 0 0 3px;
  border: 0;
  margin: 0;
  padding: 7px;
  background-color: #fff;
  transition: background-color 0.25s;
  box-sizing: border-box;
}
.search-form__input:hover,
.search-form__input:focus {
  background-color: #ffffcc;
  outline: none;
}
.search-form__button {
  height: 30px;
  background-color: #fff;
  border: 0;
  border-radius: 0 3px 3px 0;
  border-left: 1px solid #ccc;
  cursor: pointer;
  padding: 7px;
}
.search-form__button:hover,
.search-form__button:focus {
  background-color: #ffffcc;
  outline: none;
}
.site-logo {
  color: #fff;
  font-size: 20px;
  font-weight: 700;
  text-decoration: none;
  transition: color 0.25s;
}
.site-logo:focus,
.site-logo:hover {
  color: #ffffcc;
  text-decoration: none;
}
.content-and-sidebar-wrapper {
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  padding: 0 15px;
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
  color: #444;
  font-size: 13px;
  line-height: 1.4;
  font-family: sans-serif;
  word-wrap: break-word;
}
.post p {
  margin: 13px 0;
}
.post strong {
  color: #454545;
}
.post a {
  color: #eb0000;
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
.posts-wrapper {
  width: 500px;
}
.posts-wrapper {
  width: 100%;
  max-width: 500px;
  margin: 0 auto;
}
@media screen and (min-width: 992px) {
  .posts-wrapper {
    margin: 0;
  }
}
.sidebar {
  display: flex;
  flex-direction: column;
  max-width: 260px;
  overflow-x: hidden;
  margin: 0 auto;
  font-family: sans-serif;
}
@media screen and (min-width: 992px) {
  .sidebar {
    margin: 0;
  }
}
.post-heading {
  display: inline;
  font-size: 18px;
  color: #eb0000;
  font-weight: 400;
  font-family: sans-serif;
}
.popular-posts-heading {
  margin: 12px 0 3px 0;
  font-size: 18px;
  color: #eb0000;
}
.popular-posts-list {
  max-width: 260px;
  list-style-type: none;
  font-size: 12px;
}

.link {
  text-decoration: underline;
  color: #eb0000;
  font-size: 13px;
  font-weight: 400;
  font-family: sans-serif;
}
.link:hover,
.link:focus {
  text-decoration: none;
}
.link_size_big {
  font-size: 18px;
}
.link_color_white {
  color: #fff;
}
.footer {
  padding: 15px;
  background-color: #eb0000;
  color: #fff;
  margin-top: 20px;
  font-size: 14px;
  display: flex;
  justify-content: center;
  box-sizing: border-box;
  font-family: sans-serif;
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
  height: 36px;
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
  background-color: #eb0000;
  color: #fff;
  text-decoration: none;
  font-family: sans-serif;
}
.page-numbers:hover,
.page-numbers:focus {
  background-color: #339900;
}
.dots:hover,
.dots:focus {
  background-color: #eb0000;
}
.current,
.current:hover,
.current:focus {
  background-color: #ed8000;
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
  font-size: 18px;
  font-weight: 700;
  color: #eb0000;
  font-family: sans-serif;
}
.fb-comments {
  min-height: 180px;
}
.post-views-label,
.post-views-count {
  color: #444;
  font-size: 12px;
  display: inline;
}
.you-can-download {
  width: 100%;
  max-width: 500px;
  margin-bottom: 15px;
  font-family: sans-serif;
  color: #444;
}
</style>
</head>
<body>
  <header role="banner" class="header">
    <div class="header__content">
      <a class="site-logo" href="/" title="Home page">SavesForGames.Com</a>
      <form role="search" class="search-form" id="searchform" action="//savesforgames.com/" method="get">
        <input class="search-form__input" aria-label="Enter here title of a game to find a savegame" name="s" type="text" placeholder="Find a savegame..">
        <button class="search-form__button" aria-label="Search button" id="searchsubmit" type="submit">Search</button>
      </form>
    </div>
  </header>

  <div class="google-ads-in-header">
  	<!-- savesforgames в шапке 728px -->
  	<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3398097190333973"
     data-ad-slot="3640909975"></ins>
  	<script>
  	(adsbygoogle = window.adsbygoogle || []).push({});
  	</script>
  </div>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12705312-6', 'savesforgames.com',{'siteSpeedSampleRate': 100});
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
  </script>
