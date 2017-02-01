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
<div id="form">
	<h3>マイページ</h3>

{!! Form::open(['url' => ['my-page/update', Auth::user()->id], 'files' => true]) !!}
<table>
<tbody>
	<tr>
		<th>Image</th>
		<td>
			{!! Form::file('avatar')!!}
		</td>
	</tr>
	<tr>
		<th>User Name</th>
		<td>
			{!! Form::text('name', isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email) !!}
		</td>
	</tr>
	<tr>
		<th>Email</th>
		<td>
			{!! Form::email('email', Auth::user()->email ) !!}
		</td>
	</tr>
	<tr>
		<th>Password</th>
		<td>
			{!! Form::password('password') !!}
		</td>
	</tr>
	<tr>
		<th>New Password</th>
		<td>
			{!! Form::password('passwordNew') !!}
		</td>
	</tr>
	<tr>
		<th>New Password （確認）</th>
		<td>
			{!! Form::password('passwordNewConfirm') !!}
		</td>
	</tr>
</tbody>
</table>
	<p>
		{!! Form::submit('Save', ['id' => 'formbtn']) !!}
	</p>
{!! Form::close() !!}
</div><!-- #form -->
</main>

@endsection