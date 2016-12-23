<article>
	<div id="profile">
		<img src="">
		<div id="name">
			<p>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}さんのマイページ<p>
		</div>
	</div>
	<div id="category">
		<ul>
			<li><a href="pt2/my-page">>> プロフィール変更</a></li>
			<li><a href="#">>> 投稿した本を見る</a></li>
			<li><a href="#">>> 本を投稿する</a></li>
		</ul>
	</div>
</article>