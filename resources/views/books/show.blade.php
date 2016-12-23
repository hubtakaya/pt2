@extends('layouts.app')
@section('addCSS')
	<link rel="stylesheet" href="http://localhost:81/pt2/css/bookPage.css" media="all">
@endsection
@section('content')

<div class="container">

<article id="book" class="clearfix">
	<div id="book_img">
		<img src="http://localhost:81/pt2{{ $book->pic->url('original') }}"
		 alt="{{ $book->title }}">
	</div><!-- /#book_img -->
	<div id="book_msg">
		<h3 id="book_msg_title">
			{{ $book->title }}
		</h3>
		<p id="book_msg_intro">
			{{ $book->intro }}
		</p>
	</div><!-- /#book_msg -->
</article><!-- /#book -->

<article id="comment">

<div class="comment clearfix">
	<div class="icon">
		<img src="#">
		<p class="username"></p>
	</div><!-- /.icon -->
	<div class="msg">
		<p></p>
	</div><!-- /.msg -->
</div><!-- /.comment -->

<div class="comment clearfix">
	<div class="ico	n">
		<img src="#">
		<p class="username"></p>
	</div><!-- /.icon -->
	<div class="msg">
		<p></p>
	</div><!-- /.msg -->
</div><!-- /.comment -->

</article><!-- /#comment -->

</div><!-- /.container -->
@endsection