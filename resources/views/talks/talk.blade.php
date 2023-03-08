<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    </head>
</header>
<section>
<div class="talk">
	<div class="talk_left">
		<p></p>
	</div>
	<div class="talk_right">
  @foreach ($talks as $talk)
		<p>{{ $talk->content }}</p>
	</div>
</div>
</section>

<footer class="footer">
    <form action="{{ route('talks.create')}}" method="post" class="talk_form" id="talk_area">
    {{ csrf_field() }}
      <div class="talk_wrapper">
      <input type="text" id="talk" class="search">
       <input type="submit" value=""  class="talk_btn" value="{{ old('talk') }}"/>
       @endforeach
      </div>
    </form>
</footer>
    </body>
</html>