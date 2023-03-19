@extends('template')
@section('content')
<header class="header float top">
<div class="timeline_width timeline_wrapper">
          <form action="" method="get" class="search_form">
          <div class="dropdown">
      @if(Auth::check())
        <button class="btnB  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button"><a href="{{ route('posts.create') }}">投稿する</a></button>
          <button class="dropdown-item" type="button"><a href="timeline">タイムライン</a></button>
          <button class="dropdown-item" type="button"><a href="fixed">固定タイムライン</a></button>
          <button class="dropdown-item" type="button"><a href="talk_all">トーク一覧</a></button>
          <button class="dropdown-item" type="button"><a href="/">マイページ</a></button>
          <button  id="logout" class="dropdown-item" type="button"><a href="/">ログアウト</a></button>
      @else
      <a href="top">topへ戻る</a>
      @endif
      </div>
    </form>
  </div><!--timeline_width-->
    </header>
<section>
<div class="talk">
	<div class="talk_left">
    テキストテキスト
	</div>
  @foreach ($talks as $talk)
  <div class="talk_fixed">
  <li>{{$talk->created_at}}</li>
	<div class="talk_right">
    <ul class="ul_right">
		<li class="talk_text">{{ $talk->content }}</li>
  </ul>
</div>
</div><!--talk_fixed-->
@endforeach
</div>
</section>

  <footer class="footer">
      <form action="{{ route('talks.create')}}" method="post" class="talk_form">
        @csrf
        <div class="talk_wrapper">
        <input type="text" name="content" id="talk" class="search">
        <button type="submit" class="talk_btn"></button>
        </div>
      </form>
  </footer>
@endsection