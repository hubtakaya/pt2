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
	<h3>ID・パスワードの入力</h3>

<form action="login" method="post">
{!! csrf_field() !!}
<table>
<tbody>
	<tr>
		<th>User ID</th>
		<td><input name="email" type="email"></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><input name="password" type="password"></td>
	</tr>
</tbody>
</table>
	<p><input type="submit" value="Sign In" id="formbtn"></p>
</form><!-- #signin -->
</div><!-- #form -->

<p id="newAccount"><a href="http://localhost:81/pt2/auth/register">※新しくアカウント登録</a></p>

</main>
@endsection