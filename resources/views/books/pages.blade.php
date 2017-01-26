@extends('layouts.app')
@section('addCSS')
	<link rel="stylesheet" href="http://localhost:81/pt2/css/base.css" media="all">
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

	<div id="gross_list">
	@foreach($books as $book)
		<div class="list">
			<div class="list_image">
				<img src="http://localhost:81/pt2{{ $book->pic->url('original') }}">
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

	<div class="container">
		<div class="tc">
			{!! $books->render() !!}
		</div>
	</div>

	</main>

@endsection