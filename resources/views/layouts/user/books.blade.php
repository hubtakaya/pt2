@extends('layouts.app')
@section('addCSS')
	<link rel="stylesheet" href="{{ get_env() }}/css/MyPage.css" media="all">
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

@include('layouts.user.article')

<div id="dammy"></div>

<main>
	<div id="my-book">
		<ul id="my-book_list">
		@foreach ($books as $book)
			<li>
				<span class="my-book_title">{{ $book->title }}</span>
				<a class="my-book_edit" href="{{ get_env() }}/books/edit/{{ $book->id }}">編集</a>
			</li>
		@endforeach
		</ul>
	</div>
	<div class="tc">
		{!! $books->render() !!}
	</div>
</main>

@endsection