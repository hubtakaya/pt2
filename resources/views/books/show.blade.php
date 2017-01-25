@extends('layouts.app')
@section('addCSS')
	<link rel="stylesheet" href="http://localhost:81/pt2/css/base.css" media="all">
	<link rel="stylesheet" href="http://localhost:81/pt2/css/bookPage.css" media="all">
@endsection
@section('content')

<div class="container">

<article id="book" class="clearfix">
	<div id="book_img">
		<img src="http://localhost:81/pt2{{ $book->pic->url('original') }}"
		 alt="{{ $book->title }}">
	</div><!-- /#book_img -->
	<div id="book_msg">
		<h3 id="book_msg_title">
			{{ $book->title }}
		</h3>
		<p id="book_msg_intro">
			{{ $book->intro }}
		</p>
	</div><!-- /#book_msg -->
</article><!-- /#book -->

<article id="comment">
	<h2>Comments</h2>

	@forelse($book->comments as $comment)
		<div class="comment clearfix">
			<div class="icon">
				<img src="http://localhost:81/pt2/uploads/avatars/{{ isset(App\User::find( $comment->user_id )->avatar) ? App\User::find( $comment->user_id )->avatar : 'default.jpg' }}">
				<p class="username">{{ isset(App\User::find( $comment->user_id )->name) ? App\User::find( $comment->user_id )->name : 'Not Found' }}</p>
			</div><!-- /.icon -->
			<div class="msg">
				<p>{{ $comment->body }}</p>
			</div><!-- /.msg -->
		</div><!-- /.comment -->
	@empty
		<p>Not yet</p>
	@endforelse

</article><!-- /#comment -->

</div><!-- /.container -->




<!--
{!! Form::open(['url' => ['CommentsController@store', $book->id], 'files' => true]) !!}
<table>
<tbody>
	<tr class="textarea">
		<th>コメント</th>
		<td>
			{!! Form::textarea('body', null) !!}
		</td>
	</tr>
</tbody>
</table>
	<p>{!! Form::submit('Add!', ['id' => 'formbtn']) !!}</p>
{!! Form::close() !!}
 -->

<form method="post" action="{{ action('CommentsController@store', [$book->id, Auth::user()->id]) }}">
{{ csrf_field() }}
<table>
<tbody>
	<tr class="textarea">
		<th>コメント</th>
		<td>
			<textarea name="body">{{ old('body') }}</textarea>
		</td>
	</tr>
</tbody>
</table>
	<p><input id="formbtn" type="submit" value="Send"></p>
</form>

@endsection