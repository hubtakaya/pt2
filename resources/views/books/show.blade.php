@extends('layouts.app')
@section('addCSS')
	<link rel="stylesheet" href="{{ get_env() }}/css/bookPage.css" media="all">
@endsection
@section('content')

<div class="container">

<article id="book" class="clearfix">
	<div id="book_img">
		<img src="{{ get_env() }}{{ $book->pic->url('original') }}"
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

	@forelse($comments as $comment)
		<div class="comment clearfix">
			<div class="icon">
				<!-- <img src="{{ get_env() }}/uploads/avatars/{{ isset(App\User::find( $comment->user_id )->avatar) ? App\User::find( $comment->user_id )->avatar : 'default.jpg' }}"> -->
				<img src="{{ get_CommentAvatar() }}">

				<p class="username">{{ isset(App\User::find( $comment->user_id )->name) ? App\User::find( $comment->user_id )->name : 'Not Found' }}</p>
			</div><!-- /.icon -->
			<div class="msg">
				<div id="content">
					<p id="content_body">{{ $comment->body }}</p>
					<p id="content_time">{{ $comment->created_at }}</p>
				</div>
			</div><!-- /.msg -->
		</div><!-- /.comment -->
	@empty
		<p>Nobody commented.</p>
	@endforelse

	<div class="tc">
		{!! $comments->render() !!}
	</div>

</article><!-- /#comment -->


</div><!-- /.container -->




<!--
{!! Form::open(['url' => ['Controller@', $book->id], 'files' => true]) !!}
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

@if (Auth::check())
	<div class="container">
	<form method="post" action="{{ action('CommentsController@store', [$book->id, Auth::user()->id]) }}" id="comment_form">
	{{ csrf_field() }}
		<textarea name="body" rows=3>{{ old('body') }}</textarea>
		<p><input id="formbtn" type="submit" value="Comment"></p>
	</form>
	</div>
@else
@endif

@endsection