<article>
	<div id="profile">
		<img src="{{ get_MyAvatar() }}">
		<div id="name">
			<p>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}} さんのマイページ<p>
		</div>
	</div>
	<div id="category">
		<ul>
			<li><a href="{{ get_env() }}/my-page">>> プロフィール変更</a></li>
			<li><a href="{{ get_env() }}/my-page/my-books">>> 投稿した本を見る</a></li>
			<li><a href="{{ get_env() }}/books/add/1">>> 本を投稿する</a></li>
		</ul>
	</div>
</article>