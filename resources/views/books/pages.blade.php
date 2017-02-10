@extends('layouts.app')
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

	<div class="container">
		<div class="tc">
			{!! $books->render() !!}
		</div>
	</div>

	</main>

@endsection