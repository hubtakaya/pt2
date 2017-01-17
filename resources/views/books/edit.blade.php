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
<div id="form">
	<h3>Book の情報</h3>

{!! Form::open(['url' => ['books/update', $book->id], 'files' => true]) !!}
<table>
<tbody>
	<tr>
		<th>title</th>
		<td>
			{!! Form::text('title', $book->title) !!}
		</td>
	</tr>
	<tr class="textarea">
		<th>intro</th>
		<td>
			{!! Form::textarea('intro', $book->intro) !!}
		</td>
	</tr>
	<tr>
		<th>Picture</th>
		<td>
			{!! Form::file('pic', null) !!}
		</td>
	</tr>
	<tr class="hide">
		<th>Modify</th>
		<td>
			{!! Form::file('picv', null) !!}
		</td>
	</tr>
</tbody>
</table>
	<p>{!! Form::submit('Save', ['id' => 'formbtn']) !!}</p>
{!! Form::close() !!}

</main>
@endsection