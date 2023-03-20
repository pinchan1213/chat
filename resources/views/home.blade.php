@extends('template')
@section('content')
<div class="bg_pattern Crown"></div>
<div class="background"></div>
<header class="header float top">
  <div class="timeline_width timeline_wrapper">
    <form method="post" class="search_form">
    <form action="" method="get" class="search_form">
          <div class="dropdown">
      @if(Auth::check())
        <button class="btnB  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button"><a href="{{ route('posts.create') }}">投稿する</a></button>
          <button class="dropdown-item" type="button"><a href="timeline">タイムライン</a></button>
          <button class="dropdown-item" type="button"><a href="fixed">固定タイムライン</a></button>
          <button class="dropdown-item" type="button"><a href="talk_all">トーク一覧</a></button>
          <button class="dropdown-item" type="button"><a href="talk">トーク</a></button>
          <button class="dropdown-item" type="button"><a href="/">マイページ</a></button>
          <button  id="logout" class="dropdown-item" type="button"><a href="/">ログアウト</a></button>
        </div>
      </form>
    </div><!--timeline_width-->
    <div class="box15">
    <div class="box-015">マイページ</div>
      <div class="mypage_wrapper">
        <div class="mypage_img">
        <img src="{{ isset(Auth::user()->images) ? asset('storage/images/' . Auth::user()->images) : asset('images/human.png')  }}" alt="">
        </div>
        <div class="mypage_name float top">{{ optional(Auth::user())->name }}</div>
        <div class="mypage_name float ">{{ optional(Auth::user())->email }}</div>
        <div class="_a"><a href="edit">変更する</a></div>
    </div><!---mypagecontent-->
      </div><!-- mypage_wrapper  -->
    </header>

      @else
      <a href="/top">topへ戻る</a>
      @endif
@endsection