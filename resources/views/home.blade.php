@extends('template')
@section('content')
<header class="header float top">
  <div class="timeline_width timeline_wrapper">
    <form method="post" class="search_form">
      <div class="dropdown">
      @if(Auth::check())
        <button class="btnB  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button"><a href="{{ route('posts.create') }}">投稿する</a></button>
          <button class="dropdown-item" type="button"><a href="fixed">固定タイムライン</a></button>
          <button class="dropdown-item" type="button"><a href="talk_all">トーク</a></button>
          <button class="dropdown-item" type="button"><a href="mypage">マイページ</a></button>
          <button  id="logout" class="dropdown-item" type="button"><a href="/">ログアウト</a></button>
      @else
      <a href="top">topへ戻る</a>
      @endif
      </div>
    </form>
  </div><!--timeline_width-->
  <div class="mypage_text">マイページ</div>
    <div class="mypage_wrapper">
      <div class="mypage_img ">
      <img src="{{ isset(Auth::user()->images) ? asset('storage/images/' . Auth::user()->images) : asset('images/human.png')  }}" alt="">
      </div>
      <div class="mypage_name float top">{{ Auth::user()->name }}</div>
      <div class="mypage_name float top">{{ Auth::user()->email }}</div>
    <div class="line float"></div>
        <ul class="btn_list">
            <li class="btn_item"><a href="talk_all">トーク</a></li>
            <li class="btn_item"><a href="main">タイムライン</a></li>
            <li class="btn_item"><a href="edit">変更する</a></li>
        </ul>
    </div>
</header>
@endsection