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
  <link rel="preconnect" href="https://pbs.twimg.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://staticxx.facebook.com">
  <link rel="preconnect" href="https://www.facebook.com">
  <link rel="preconnect" href="https://connect.facebook.net">
  <link rel="preconnect" href="https://googleads.g.doubleclick.net">
  <link rel="preconnect" href="https://adservice.google.com">
  <style>
  * {
    box-sizing: border-box;
    font-family: arial, sans-serif;
  }
  html, body {
    overflow-x: hidden;
  }
  body, div, header, aside, footer, input, button, ul {
    margin: 0;
    padding: 0;
  }
  .google-ads-in-header {
    width: 728px;
    margin: 20px auto 0 auto;
  }

  @media screen and (min-width: 0px) and (max-width: 782px) {
    .google-ads-in-header {
      width: 100%;
      margin: 20px auto 0 auto;
    }
  }
  .header {
    background-color: #eb0000;
    height: 40px;
    display: flex;
    justify-content: center;
  }

  .header__content-wrapper {
    width: 780px;
    height: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  @media screen and (min-width: 0px) and (max-width: 782px) {
    .header__content-wrapper {
      width: 100%;
      height: 40px;
      margin: 0 auto;
      padding: 0 1%;
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
  	background-color: #fff;
    width: 200px;
    height: 30px;
    border-radius: 3px 0 0 3px;
    border: 0;
    margin: 0;
    padding: 7px;
		transition: background-color 0.25s;
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
		transition: background-color 0.25s;
  }
	
	.search-form__button:hover,
	.search-form__button:focus {
		background-color: #ffffcc;
		outline: none;
	}

  @media screen and (min-width: 0px) and (max-width: 782px) {
    .search-form {
      width: 44%;
    }

    .search-form__input {
      width: 48%;
      height: 30px;
    }

    .search-form__button {
      width: 40%;
      height: 30px;
    }
  }
  .site-logo {
    width: 206px;
    height: 23px;
    color: #fff;
    font-size: 20px;
    font-weight: 700;
    text-decoration: none;
		transition: background-color 0.25s;
  }

  .site-logo:hover,
	.site-logo:focus {
  	color: #ffffcc;
    text-decoration: none;
  }

  @media screen and (min-width: 0px) and (max-width: 782px) {
    .site-logo {
      width: 54%;
    }
  }
  .content-and-sidebar-wrapper {
    width: 780px;
    height: 100%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
  }

  @media screen and (min-width: 0px) and (max-width: 782px) {
    .content-and-sidebar-wrapper {
      width: 100%;
    }
  }
  .post {
    width: 500px;
    margin-top: 10px;
    color: #444;
    font-size: 13px;
    line-height: 1.4;
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
  .post a:hover {
    text-decoration: none;
  }

  @media screen and (min-width: 0px) and (max-width: 782px) {
    .post {
      width: 98%;
    }

    .post img {
      width: 100%;
      max-width: 500px;
      height: auto;
    }
  }
  .posts-wrapper {
    width: 500px;
  }

  @media screen and (min-width: 0px) and (max-width: 782px) {
    .posts-wrapper {
      width: 100%;
      padding: 0 1vw;
    }
  }
  
  .sidebar {
    width: 260px;
    min-height: 709px;
    overflow-x: hidden;
  }

  @media screen and (min-width: 0px) and (max-width: 782px) {
    .sidebar {
      display: none;
    }
  }
  .post-heading,
  .post-heading__link {
    display: block;
    width: 500px;
    min-height: 25px;
    font-size: 18px;
    color: #eb0000;
    font-weight: 400;
  }
  .post-heading__link:hover {
    text-decoration: none;
  }
  @media screen and (min-width: 0px) and (max-width: 782px) {
    .post-heading,
    .post-heading__link {
      max-width: 98%;
      
    }
  }
  .twitter-timeline {
  	width:260px !important;
  	height:500px !important;
  }
  .popular-posts-heading {
    padding-top: 20px;
    font-size: 18px;
    color: #eb0000;
  }
  .popular-posts-list {
    width: 260px;
    list-style-type: none;
    font-size: 12px;
  }
  .popular-posts-list__link {
    color: #eb0000;
		text-decoration: underline;
  }
	
	.popular-posts-list__link:hover,
	.popular-posts-list__link:focus {
		text-decoration: none;
	}

  .footer {
    width: 100%;
    min-height: 50px;
    background-color: #eb0000;
    color: #fff;
    margin-top: 20px;
    font-size: 14px;
    display: flex;
    justify-content: center
  }
  
  .footer__inner {
    width: 780px;
    display: flex;
    justify-content: space-between;
    align-items: center
  }
  
  .footer__links-wrap {
    min-height: 36px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  
  .footer__links-wrap_links-align_left {
    align-items: flex-start;
  }
  
  .footer__links-wrap_links-align_right {
    align-items: flex-end;
  }
  
  .footer__link {
    color: #fff;
    white-space: nowrap;
  }
  
  .footer__text {
    white-space: nowrap;
  }
  
  .footer__link:hover {
    text-decoration: none;
  }
  
  
  @media screen and (min-width:0px) and (max-width:782px) {
    .footer__inner {
        width: 98vw;
        padding: 1vh 2vw
    }
    .footer__links-wrap {
        width: 40%
    }
  
  }
  
  .pagination {
    width: 500px;
    height: 33px;
    padding-top: 10px;
    display: flex;
  }
  
  .page-numbers,
  .current {
    height: 23px;
    margin-right: 4px;
    padding: 3px 7px 0;
    background-color: #eb0000;
    color: #fff;
    text-decoration: none;
  }
  
	.page-numbers:hover,
	.page-numbers:focus {
		background-color: #003399;
	}
	
  .current {
    background-color: #ed8000
  }
  
	.dots:hover,
	.dots:focus {
		background-color: #eb0000;
	}
	.current:hover,
	.current:focus {
		background-color: #ed8000;
	}
	
  .google-ads-and-comments-wrapper {
    width: 500px;
    min-height: 307px;
  }
  
  @media screen and (min-width:0px) and (max-width:782px) {
    .google-ads-and-comments-wrapper {
        width: 98%;
    }
  }
  
  .social-network-like-buttons {
    max-width: 500px;
    height: 20px;
    margin-top: 5px
  }
  
  .leave-a-comment {
    max-width: 500px;
    margin: 10px 0;
    font-size: 18px;
    font-weight: 700;
    color: #eb0000
  }
  
  .fb-comments {
    min-height: 180px;
  }
  
  @media screen and (min-width:0px) and (max-width:782px) {
    .fb-comments {
      max-width: 98%;
    }  
  }
  
  .post-views.entry-meta > span .post-views-icon.dashicons {
    display: inline-block;
    font-size: 16px;
    line-height: 1;
    text-decoration: inherit;
    vertical-align: middle;
  }
  
  .post-views.entry-meta > span {
    color: #333;
    font-size: 12px
  }
  
  .you-can-download {
    width: 500px;
    max-height: 20px;
    margin-bottom: 13px
  }
  
  .you-can-download__link {
    color: #eb0000
  }
  
  .you-can-download__link:hover {
    text-decoration: none
  }

  </style>
</head>
<body>
  <header role="banner" class="header">
    <div class="header__content-wrapper">
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
