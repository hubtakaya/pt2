@extends('layouts.app')
@section('addCSS')
	<link rel="stylesheet" href="{{ get_env() }}/css/base.css" media="all">
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

{!! Form::open(['url' => 'books/create/', 'files' => true]) !!}
<table>
<tbody>
	<tr>
		<th>title</th>
		<td>
			{!! Form::text('title', null) !!}
		</td>
	</tr>
	<tr class="textarea">
		<th>intro</th>
		<td>
			{!! Form::textarea('intro', null) !!}
		</td>
	</tr>
	<tr>
		<th>Picture(必須)</th>
		<td>
			{!! Form::file('pic', null) !!}
		</td>
	</tr>
	<tr class="hide">
		<th>user_id</th>
		<td>
			{!! Form::text('user_id', Auth::user()->id) !!}
		</td>
	</tr>
</tbody>
</table>
	<p>{!! Form::submit('Add!', ['id' => 'formbtn']) !!}</p>
{!! Form::close() !!}

</main>
@endsection