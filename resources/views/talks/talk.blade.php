<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <title>talk</title>
</head>

<body>
        <div id="message_area">

        </div>
        <div>
           <textarea id = "message" rows="5" cols="100"></textarea>
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