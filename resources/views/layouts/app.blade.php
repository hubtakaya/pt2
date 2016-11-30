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

	<!-- stylesheet -->
	@yield('addCSS')
</head>

<body>

<header>
	<div id="{{{ isset($nav) ? $nav : 'other_nav' }}}" class="clearfix">
		<div id="nav_msg">
		<ul>
			@if (Auth::guest())
				<li><a href="http://localhost:81/pt2/auth/login">■ログイン</a></li>
			@else
				<li><a href="MyPage.php"><div id="icon_pro"></div></a></li>
				<li><a href="http://localhost:81/pt2/books/add/1">■Add!</a></li>
			@endif

			<li><a href="#">■本を探す</a></li>
			<li><a href="http://localhost:81/pt2">■ホームに戻る</a></li>

			@if (Auth::check())
				<li><a href="http://localhost:81/pt2/auth/logout">■ログアウト</a></li>
			@endif
		</ul>
		</div><!-- #nav_msg -->
	</div><!-- /.other_nav -->

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
			<h3>推薦図書.com</h3>
		</div>
		<div id="footer_nav_nav">
			<ul>
				<li><a href="#">ホーム</a></li>
				<li><a href="#">書籍一覧</a></li>
				<li><a href="#">運営者情報</a></li>
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