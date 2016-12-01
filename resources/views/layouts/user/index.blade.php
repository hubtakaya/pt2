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


@include('layouts.user.article')

<div id="dammy"></div>

<main>
<div id="form">
	<h3>マイページ</h3>

<form action="" type="post">
<table>
<tbody>
	<tr>
		<th>氏</th>
		<td><input name="ID" type="text"></td>
	</tr>
	<tr>
	<tr>
		<th>名</th>
		<td><input name="ID" type="text"></td>
	</tr>
	<tr>
	<tr>
		<th>User Name</th>
		<td><input name="ID" type="text"></td>
	</tr>
	<tr>
	<tr>
		<th>User ID</th>
		<td><input name="ID" type="text"></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><input name="password" type="password"></td>
	</tr>
	<tr>
		<th>New Password</th>
		<td><input name="password" type="password"></td>
	</tr>
	<tr>
		<th>New Password （確認）</th>
		<td><input name="password" type="password"></td>
	</tr>
</tbody>
</table>
	<p><input type="submit" value="Save" id="formbtn"></p>
</form><!-- #signin -->
</div><!-- #form -->
</main>

@endsection