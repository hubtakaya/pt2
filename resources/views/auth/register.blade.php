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
<div id="form">
	<h3>ID・パスワードの入力</h3>

<form action="register" method="post" enctype="multipart/form-data">
{!! csrf_field() !!}
<table>
<tbody>
	<tr>
		<th>User Name</th>
		<td><input name="name" type="text"></td>
	</tr>
	<tr>
	<tr>
		<th>mail</th>
		<td><input name="email" type="email"></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><input name="password" type="password"></td>
	</tr>
	<tr>
		<th>Password （確認）</th>
		<td><input name="password_confirmation" type="password"></td>
	</tr>
</tbody>
</table>
	<p><input type="submit" value="Sign Up" id="formbtn"></p>
</form>
</main>

@endsection