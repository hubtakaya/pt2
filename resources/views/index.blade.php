@extends('layouts.app')
@section('addCSS')
	<link rel="stylesheet" href="http://suisen-book.com/css/base.css" media="all">
@endsection
@section('addHeaderDiv')
	<div id="theme" class="container">
		<h1 class="ta-c">推薦図書.com</h1>
		<p>"読んだことのある本についてユーザーの<!--
		-->皆さんが自由に感想を投稿していきます。<!--
		-->同じく読んだことがある人と意見を交換するも良し、<!--
		-->新しく読む本を見つけるきっかけにするも良しのサイトです。</p>
		</div><!-- /#title -->
	</div><!-- /.container -->
@endsection
@section('content')

@if ($errors->any())
	<div class="container">
	<div id="error">
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
	</div>
@endif

	<main>
	<div class="container">

	<div class="h2">
		<h2 id="top" class="top">推薦図書.com　3つの特徴</h2>
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
	</div>

	<div id="gross_list">

	@foreach($books as $book)
		<div class="list">
			<div class="list_image">
				<img src="http://suisen-book.com/{{ $book->pic->url('original') }}">
			</div>
			<div class="list_msg">
				<p class="list_text"><b>{{ $book->title }}</b></br>{{ $book->autor }}</p>
			</div>
			<div class="button">
				<p class="btn_each"><b>
					<a href="{{ url('books', $book->id) }}">もっと見る...</a>
				</b></p>
			</div>
		</div><!-- /.list -->
	@endforeach

	</div>

	</div><!-- /.container -->
	</main>

@endsection
@section('addFooterDiv')
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