@extends('layouts.app')
<!-- Main Content -->
@section('addCSS')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
@section('content')
<main>
<div id="form">
    <h3>パスワード・リセット</h3>
        @if (session('status'))
            <div class="container">
            <div id="error">
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            </div>
            </div>
        @endif

        <form role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}
        <table>
        <tbody>
            <tr>
                <th>E-mail Adrres</th>
                <td>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                </td>
            </tr>
        </tbody>
        </table>
            <p><input type="submit" value="Send Link" id="formbtn"></p>
        </form>
        </div>
</main>
@endsection
