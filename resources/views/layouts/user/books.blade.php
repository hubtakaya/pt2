@extends('layouts.app')
@section('addCSS')
	<link rel="stylesheet" href="http://suisen-book.com/css/base.css" media="all">
	<link rel="stylesheet" href="http://suisen-book.com/css/MyPage.css" media="all">
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
			<li>{{ $book->title }}, <a href="http://suisen-book.com/books/edit/{{ $book->id }}"></a></li>
		@endforeach
		</ul>
	</div>
</main>

@endsection