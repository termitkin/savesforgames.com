<!doctype html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title('', true);?> | Trainers For Games</title>
  <?php wp_head();?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="fb:admins" content="100001912999823"/>
  <meta property="fb:app_id" content="204938163503477" />
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="preconnect" href="https://pagead2.googlesyndication.com">
  <link rel="preconnect" href="https://googleads.g.doubleclick.net">
  <style>
  * {
    box-sizing: border-box;
    font-family: arial, sans-serif;
  }
  html, body {
    overflow-x: hidden;
		height: 100%;
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
    background-color: #09c;
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
    width: 200px;
    height: 30px;
    border-radius: 3px 0 0 3px;
    border: 0;
    margin: 0;
    padding: 7px;
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
  }

  .site-logo:hover {
    text-decoration: none;
  }

  @media screen and (min-width: 0px) and (max-width: 782px) {
    .site-logo {
      width: 54%;
    }
  }

  .page-404 {
    max-width: 980px;
    margin: 0 auto;
  }
  .page-404__heading {
    color: #333;
  }
  .page-404__image {
    width: 100%;
    max-width: 980px;
    height: auto;
  }
  </style>
</head>
<body>

  <header class="header">
    <div class="header__content-wrapper">
      <a class="site-logo" href="/" title="Home page">SavesForGames.com</a>
      <form class="search-form" id="searchform" action="//savesforgames.com/" method="get">
        <input class="search-form__input" name="s" type="text" placeholder="Find a savegame..">
        <button class="search-form__button" id="searchsubmit" type="submit">Search</button>
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

	<div class="page-404">
    <h1 class="page-404__heading">Error 404: Page not Found</h1>
		<img class="page-404__image" src="<?php echo esc_url( get_template_directory_uri() );?>/404-error/404.jpg" alt="Error 404: Page not Found" />
	</div>
</body>
</html>
