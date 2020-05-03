
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Marble &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
  <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="FreeHTML5.co" />

    <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FreeHTML5.co
    
  Website: 		http://freehtml5.co/
  Email: 			info@freehtml5.co
  Twitter: 		http://twitter.com/fh5co
  Facebook: 		https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
  -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

  
  <!-- Animate.css -->
  <link rel="stylesheet" href="{{ asset('public/marble/css/animate.css') }}">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="{{ asset('marble/css/icomoon.css') }}">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="{{ asset('marble/css/bootstrap.css') }}">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="{{ asset('marble/css/flexslider.css') }}">
  <!-- Theme style  -->
  <link rel="stylesheet" href="{{ asset('marble/css/style.css') }}">

  <!-- Modernizr JS -->
  <script src="{{ asset('marble/js/modernizr-2.6.2.min.js') }}"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
  <div id="fh5co-page">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

      <h1 id="fh5co-logo"><a href="index.html">Links</a></h1>
      <nav id="fh5co-main-menu" role="navigation">
        <ul>
          <li class="fh5co-active"><a href="/top">Top</a></li>
          <li><a href="/ranking">Ranking</a></li>
          <li><a href="/list">List</a></li>
          <li><a href="/create">New</a></li>
        </ul>
      </nav>

      <div class="fh5co-footer">
        <p><small>&copy; 2016 Blend Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
        <ul>
          <li><a href="#"><i class="icon-facebook2"></i></a></li>
          <li><a href="#"><i class="icon-twitter2"></i></a></li>
          <li><a href="#"><i class="icon-instagram"></i></a></li>
          <li><a href="#"><i class="icon-linkedin2"></i></a></li>
        </ul>
      </div>

    </aside>

    <div id="fh5co-main">
      <div class="main-point">
        {{-- TODO: タイトルは仮　ゆうきが決める --}}
          <p>ファッション投稿サイト</p>
          <img src="{{ asset('marble/images/header-bg.jpg') }}" alt="top" width="100%" max-width="100%" height="auto"/>
          {{-- TODO: 必要であればボタンを使う --}}
          {{-- <button id="new" type="button" class="btn btn-primary btn-lg">新規投稿</button>
          <button id="list" type="button" class="btn btn-success btn-lg">投稿一覧</button>
          <button id="ranking" type="button" class="btn btn-danger btn-lg">ランキング</button> --}}
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('marble/js/jquery.min.js') }}"></script>
  <!-- jQuery Easing -->
  <script src="{{ asset('marble/js/jquery.easing.1.3.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('marble/js/bootstrap.min.js') }}"></script>
  <!-- Waypoints -->
  <script src="{{ asset('marble/js/jquery.waypoints.min.js') }}"></script>
  <!-- Flexslider -->
  <script src="{{ asset('marble/js/jquery.flexslider-min.js') }}"></script>
  
  
  <!-- MAIN JS -->
  <script src="{{ asset('marble/js/main.js') }}"></script>

  </body>
</html>

<style>
/* CSSのテンプレートを使っているのでカスタマイズはここに書いていく */
.main-point {
  position: relative;
}

.main-point p {
  position: absolute;
  font-size: 50px;
  color: white;
  font-family: 'Hiragino Kaku Gothic Pro','ヒラギノ角ゴ Pro W3','メイリオ',Meiryo,'ＭＳ Ｐゴシック',sans-serif;
  top: 300px;
  left: 250px;
}

.main-point img {
  width: 100%;
  z-index: 1;
}

/* TODO: 必要であればボタンを使う */
/* .main-point button {
  margin: 10px 25px;
  z-index: 9999;
} */


</style>