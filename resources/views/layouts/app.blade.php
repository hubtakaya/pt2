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
	<script src="http://localhost:81/pt2/js/jquery.js"></script>
	<script src="http://localhost:81/pt2/js/iscroll.js"></script>

	<link rel="stylesheet" href="http://localhost:81/pt2/css/drawer.min.css">
	<script src="http://localhost:81/pt2/js/drawer.min.js"></script>
	<script src="http://localhost:81/pt2/js/customized.js"></script>

	<link rel="stylesheet" href="http://localhost:81/pt2/css/font-awesome.css">

	<!-- stylesheet -->
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
						<a href="http://localhost:81/pt2/auth/login"><i class="fa fa-sign-in" aria-hidden="true"></i>ログイン</a>
					</li>
				@else
					<li>
						<a href="http://localhost:81/pt2/my-page">
							<div id="icon_pro">

								<!--
									<img src="{{ public_path() }}\uploads\avatars\{{ Auth::user()->avatar }}">
								-->

								<!--
									<img src="http://localhost:81/pt2/uploads/avatars/{{ Auth::user()->avatar }}">
								-->

								<img src="http://localhost:81/pt2/uploads/avatars/{{ DB::table('users')->where('id', Auth::id())->value('avatar') }}">

								<!--
									<p>{{ Auth::user()->name }} さん</p>
								-->

								<p>{{ DB::table('users')->where('id', Auth::id())->value('name') }} さん</p>

							</div>
						</a>
					</li>
					<li>
						<a href="http://localhost:81/pt2/books/add/1">
								<i class="fa fa-cloud-upload" aria-hidden="true"></i>本を紹介する
						</a>
					</li>

				@endif
				<li><a href="http://localhost:81/pt2/books"><i class="fa fa-book" aria-hidden="true"></i>推薦図書一覧</a></li>

				<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i>本を探す (準備中)</a></li>
				<li><a href="http://localhost:81/pt2"><i class="fa fa-home" aria-hidden="true"></i>ホームに戻る</a></li>

				@if (Auth::check())
					<li><a href="http://localhost:81/pt2/auth/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>ログアウト</a></li>
				@endif

				<li><a id="back" href="#"><i class="fa fa-times" aria-hidden="true"></i>メニューを閉じる</a></li>
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
			<h3><a href="http://localhost:81/pt2">推薦図書.com</a></h3>
		</div>
		<div id="footer_nav_nav">
			<ul>
				<li><a href="http://localhost:81/pt2">ホーム</a></li>
				<li><a href="http://localhost:81/pt2/books">書籍一覧</a></li>
				<li><a href="http://localhost:81/pt2#footer_info">運営者情報</a></li>
				<li><a href="#">お問い合わせ</a></li>
			</ul>
		</div>
	</div><!-- /.container -->
	</div>
	<div id="footer_bottom">
	<div class="container">
		<p><small>Copyrights &copy; Cafe Leaf All Rights Reserved.</small></p>
	</div><!-- /.container -->
	</div><!-- /#footer_bottom -->
</footer>

</body>
</html>