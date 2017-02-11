@extends('layouts.app')
@section('addHeaderDiv')
	<div id="theme">
		<h1 class="ta-c">推薦図書.com</h1>
		<p>"読んだことのある本についてユーザーの<!--
		-->皆さんが自由に感想を投稿していきます。<!--
		-->同じく読んだことがある人と意見を交換するも良し、<!--
		-->新しく読む本を見つけるきっかけにするも良しのサイトです。</p>
		<a href="{{ get_env() }}/facebook" id="btn-facebook_login">
			<i class="fa fa-facebook fa-top" aria-hidden="true"></i>
			<span class="btn-text">Facebook ログイン(準備中)</span>
		</a>
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
			<i class="fa fa-id-card fa-top" aria-hidden="true"></i>
			<div class="points_msg">
				<p><b>ユーザー登録して自己紹介文を記載！</b><br></p></p>
			</div>
		</div>
		<div class="points">
			<i class="fa fa-cloud-upload fa-top" aria-hidden="true"></i>
			<div class="points_msg">
				<p><b>一押しの本をアップロード！</b><br></p>
			</div>
		</div>
		<div class="points">
			<i class="fa fa-comments-o fa-top" aria-hidden="true"></i>
			<div class="points_msg">
				<p><b>コメント機能を使って他のユーザーと意見交換してみよう！</b><br></p>
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
				<img src="{{ get_env() }}{{ $book->pic->url('original') }}">
			</div>
			<div class="list_msg">
				<p class="list_text"><b>{{ $book->title }}</b></br>{{ $book->intro }}</p>
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