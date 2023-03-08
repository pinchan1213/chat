<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Todos</title>
    </head>
      <body>
            <div id="talk_area">

            </div>
            <div>
              <textarea id = "talk" rows="5" cols="100"></textarea>
              <button id="submit">送信</button>
            </div>

            <script src="/js/app.js"></script>
            <script src="{{asset('js/chat.js')}}"></script>
      </body>
      </html>



































<!-- <header class="header">
<div class="timeline_width timeline_wrapper">
          <form action="" method="get" class="search_form">
            @csrf
            <input type="text" placeholder="トーク内検索" class="search">
            <button type="submit" id="search_btn"></button>
          </form>
        </div><!--timeline_width-->
</header>
<section>
<div class="talk">
	<div class="talk_left">
		<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
	</div>
	<div class="talk_right">
		<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキス</p>
	</div>
</div>
</section>

<footer class="footer">
    <form action="" method="get" class="talk_form">
      <div class="talk_wrapper">
      <input type="text" class="search">
       <input type="submit" value=""  class="talk_btn">
      </div>
    </form>
</footer>
@endsection -->