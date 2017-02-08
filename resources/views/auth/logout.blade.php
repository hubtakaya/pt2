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
	<h3>ID・パスワードの入力</h3>
	<p>ログアウトしました。</p>
<?php
print_r ($_SESSION);
?>

<form action="" method="post">
<table>
<tbody>
	<tr>
		<th>User ID</th>
		<td><input name="mail" type="text"></td>
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
</main>
@endsection