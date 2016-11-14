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
	<link rel="stylesheet" href="http://localhost:81/pt2/css/base.css" media="all">
	@yield('addCSS')
</head>

<body>

<header>
	<div id="other_nav" class="clearfix">
		<div id="nav_msg">
		<ul>
			<li><a href="signIn.php">■ログイン</a></li>
			<li><a href="#">■本を探す</a></li>
			<li><a href="#">■ホームに戻る</a></li>
		</ul>
		</div><!-- #nav_msg -->
	</div><!-- /.other_nav -->
	<div id="header_MyPage">
			<h2>{{{ isset($pageLabel) ? $pageLabel : "推薦図書.com" }}}</h2>
	</div>
</header>


@yield('content')

<footer>
	<div id="footer_bottom">
	<div class="container">
		<p><small>Copyrights &copy; Cafe Leaf All Rights Reserved.</small></p>
	</div><!-- /.container -->
	</div><!-- /#footer_bottom -->
</footer>

	</body>
	</html>