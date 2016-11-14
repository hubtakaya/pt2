	<?php
	session_start();

	if (isset($_SESSION['auth'])) {
		if ($_SESSION['auth'] == 'true') {
			$_SESSION['auth'] == 'true';
		} else {
			$_SESSION['auth'] == 'false';
		}
	}
	error_reporting(E_ALL ^ E_NOTICE);
	?>

@extends('layouts.app')
@section('content')

	<div id="theme" class="container">
		<h1 class="ta-c">推薦図書.com</h1>
		<p>"読んだことのある本についてユーザーの<!--
		-->皆さんが自由に感想を投稿していきます。<!--
		-->同じく読んだことがある人と意見を交換するも良し、<!--
		-->新しく読む本を見つけるきっかけにするも良しのサイトです。</p>
		</div><!-- /#title -->
	</div><!-- /.container -->
	</header>

	<div id="gnav">
	<div class="container">
		<ul>
			<li><a href="#">ホーム</a></li>
			<li><a href="#">書籍一覧</a></li>
			<li><a href="#">運営者情報</a></li>
			<li><a href="#">お問い合わせ</a></li>
		</ul>
	</div><!-- /.container -->
	</div><!-- /#gnav -->

	<main>
	<div class="container">

	<div class="h2">
		<h2>推薦図書.com　3つの特徴</h2>
		<div class="points">
			<img src="#">
			<div class="points_msg">
				<p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
			</div>
		</div>
		<div class="points">
			<img src="#">
			<div class="points_msg">
				<p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
			</div>
		</div>
		<div class="points">
			<img src="#">
			<div class="points_msg">
				<p>テキストが入ります。テキストが入ります。テキストが入ります。</p>
			</div>
		</div>
	</div>

	<div class="h2">
		<h2>新着の本</h2>
		<p>新しくレビューされたり、コメントが集まっている本を一部紹介しています。</p>
		<p class="right"><b><a href="#">本の一覧はこちら</a></b></p>
	</div>

		<div id="gross_list">
		<div class="list">
			<div class="list_image"><img src="book_list/book1.jpg" alt=""></div>
			<div class="list_msg">
				<p class="list_text"><b>ワーク・シフト</b></br>リンダ・グラットン：著</p>
			</div>
			<div class="button"><p class="btn_each"><b><a href="#">もっと見る...</a></b></div>
			<!-- <p class="btn_each"><b><a href="#">もっと見る...</a></b> -->
		</div>
		<div class="list">
			<div class="list_image"><img src="book_list/book2.jpg" alt=""></div>
			<div class="list_msg">
				<p class="list_text"><b>LOVE理論</b></br>水野愛也：著</p>
			</div>
			<div class="button"><p class="btn_each"><b><a href="#">もっと見る...</a></b></div>
		</div>
		<div class="list">
			<div class="list_image"><img src="book_list/book3.jpg" alt=""></div>
			<div class="list_msg">
				<p class="list_text"><b>ウケる技術</b></br>小林昌平　山本周嗣　水野敬也：著</p>
			</div>
			<div class="button"><p class="btn_each"><b><a href="#">もっと見る...</a></b></div>
		</div>
		<div class="list">
			<div class="list_image"><img src="book_list/book4.jpg" alt=""></div>
			<div class="list_msg">
				<p class="list_text"><b>色彩を持たない田崎つくると彼の巡礼の年</b></br>村上春樹：著</p>
			</div>
			<div class="button"><p class="btn_each"><b><a href="#">もっと見る...</a></b></div>
		</div>
		<div class="list">
			<div class="list_image"><img src="book_list/book5.jpg" alt=""></div>
			<div class="list_msg">
				<p class="list_text"><b>浮気がバレる男、バレない女</b></br>今野裕幸：著</p>
			</div>
			<div class="button"><p class="btn_each"><b><a href="#">もっと見る...</a></b></div>
		</div>
		<div class="list">
			<div class="list_image"><img src="book_list/book6.jpg" alt=""></div>
			<div class="list_msg">
				<p class="list_text"><b>デジタル＆グローバル時代の凄い働き方</b></br>ダイヤモンド社：編</p>
			</div>
			<div class="button"><p class="btn_each"><b><a href="#">もっと見る...</a></b></div>
		</div>
		<div class="list">
			<div class="list_image"><img src="book_list/book7.jpg" alt=""></div>
			<div class="list_msg">
				<p class="list_text"><b>不変のマーケティング</b></br>神田昌典：著</p>
			</div>
			<div class="button"><p class="btn_each"><b><a href="#">もっと見る...</a></b></div>
		</div>
		<div class="list">
			<div class="list_image"><img src="book_list/book8.jpg" alt=""></div>
			<div class="list_msg">
				<p class="list_text"><b>人を動かす</b></br>D・カーネギー：著　創元社：編</p>
			</div>
			<div class="button"><p class="btn_each"><b><a href="#">もっと見る...</a></b></div>
		</div>
		<div class="list">
			<div class="list_image"><img src="book_list/book9.jpg" alt=""></div>
			<div class="list_msg">
				<p class="list_text"><b>ドリルを売るには穴を売れ</b></br>佐藤義典：著</p>
			</div>
			<div class="button"><p class="btn_each"><b><a href="#">もっと見る...</a></b></div>
		</div>
		<div class="list">
			<div class="list_image"><img src="book_list/book10.jpg" alt=""></div>
			<div class="list_msg">
				<p class="list_text"><b>経営戦略立案シナリオ</b></br>佐藤義則：著</p>
			</div>
			<div class="button"><p class="btn_each"><b><a href="#">もっと見る...</a></b></div>
		</div>
		</div><!-- /#gross_list -->
	</div><!-- /.container -->
	</main>

	<footer>
		<div id="footer_info">
		<div class="container">
			<div id="info_dtl">
					<h2></h2>
					<dl>
						<dt>【編集者名】</dt>
						<dd>tkやー</dd>
						<dt>【電話番号】</dt>
						<dd>090-0000-0000</dd>
						<dt>【住　　所】</dt>
						<dd>246 Times Square Building Xth FL, Room XX/XX Sukhumvit XX-XX, Klongtoey Klongtoey,Bangkok 10110</dd>
						<dt>【最寄り駅】</dt>
						<dd>XX線・XXXX駅　X版出口徒歩5分</dd>
					</dl>
			</div><!-- /#info-dtl -->
			<div id="info_img">
				<img src="img/editor.jpg" alt="編集者">
			</div><!-- /#info-img -->
		</div><!-- /.container -->
		</div><!-- /#footer_info -->
@endsection