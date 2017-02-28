<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <title>{{{ isset($pageTitle) ? $pageTitle : "推薦図書.com" }}}</title>
    <meta name="Keywords" content="本,おすすめ,推薦図書">
    <meta name="Description" content="読んだことのある本についてユーザーの
        皆さんが自由に感想を投稿していきます。
        同じく読んだことがある人と意見を交換するも良し、
        新しく読む本を見つけるきっかけにするも良しのサイトです。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ get_env() }}/js/jquery.js"></script>
    <script src="{{ get_env() }}/js/iscroll.js"></script>

    <link rel="shortcut icon" href="{{ get_env() }}/favicon.png" />
    <link rel="stylesheet" href="{{ get_env() }}/css/drawer.min.css">
    <script src="{{ get_env() }}/js/drawer.min.js"></script>
    <script src="{{ get_env() }}/js/customized.js"></script>
    <link rel="stylesheet" href="{{ get_env() }}/css/font-awesome.css">

    <link rel="stylesheet" href="{{ get_env() }}/css/base.css">
    @yield('addCSS')
</head>

<body class="drawer drawer--left">

<header>
    <div id="{{{ isset($nav) ? $nav : 'other_nav' }}}" class="clearfix">
        <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">menu</span>
            <span class="drawer-hamburger-icon"></span>
        </button>
        <nav class="drawer-nav">
            <ul class="drawer-menu">
                @if (Auth::guest())
                    <li>
                            <p id="guest">ゲストさん、こんにちは。</p>
                    </li>
                    <li>
                        <a href="{{ get_env() }}/auth/login"><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i>ログイン</a>
                    </li>
                @else
                    <li>
                        <a href="{{ get_env() }}/my-page">
                            <div id="icon_pro">

                                <img src="{{ get_MyAvatar() }}">
                                <!-- <img src="{{ get_env() }}/uploads/avatars/{{ Auth::user()->avatar }}"> -->
                                <p>{{ DB::table('users')->where('id', Auth::id())->value('name') }} さん</p>

                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ get_env() }}/books/add/1">
                                <i class="fa fa-cloud-upload fa-fw" aria-hidden="true"></i>本を紹介する
                        </a>
                    </li>

                @endif
                <li><a href="{{ get_env() }}/books"><i class="fa fa-book fa-fw" aria-hidden="true"></i>推薦図書一覧</a></li>

                <li><a href="#"><i class="fa fa-search fa-fw" aria-hidden="true"></i>本を探す (準備中)</a></li>
                <li><a href="{{ get_env() }}"><i class="fa fa-home fa-fw" aria-hidden="true"></i>ホームに戻る</a></li>

                @if (Auth::check())
                    <li><a href="{{ get_env() }}/auth/logout"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>ログアウト</a></li>
                @endif

                <li><a id="back" href="#"><i class="fa fa-times fa-fw" aria-hidden="true"></i>メニューを閉じる</a></li>
            </ul>
        </nav>
    </div>

<div id="space"></div>

@if (!isset($headerFalse))
    <div id="header_MyPage">
            <h2>{{{ isset($pageLabel) ? $pageLabel : "推薦図書.com" }}}</h2>
    </div>
@endif

@yield('addHeaderDiv')

</header>


@yield('content')

<footer>

@yield('addFooterDiv')

    <div id="footer_nav">
    <div class="container">
        <div id="footer_nav_logo">
            <h3><a href="{{ get_env() }}">推薦図書.com</a></h3>
        </div>
        <div id="footer_nav_nav">
            <ul>
                <li><a href="{{ get_env() }}">ホーム</a></li>
                <li><a href="{{ get_env() }}/books">書籍一覧</a></li>
                <li><a href="{{ get_env() }}#footer_info">運営者情報</a></li>
            </ul>
        </div>
    </div><!-- /.container -->
    </div>
    <div id="footer_bottom">
    <div class="container">
        <p><small>Copyrights &copy; 推薦図書.com All Rights Reserved.</small></p>
    </div><!-- /.container -->
    </div><!-- /#footer_bottom -->
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91141805-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
