@extends('template')
@section('content')
<div class="bg_pattern Crown"></div>
<div class="background"></div>
<header class="header float top">
  <div class="timeline_width timeline_wrapper">
    <form method="post" class="search_form">
      <!-- <form action="" method="get" class="search_form"> -->
        <div id="navArea">
      @if(Auth::check())
<nav>
  <div class="inner">
    <ul>
    <li><a href="{{ route('posts.create') }}">投稿する</a></li>
      <li><a href="{{ route('timelines.index') }}">タイムライン</a></li>
      <li><a href="{{ route('timelines.fixed') }}">固定タイムライン</a></li>
      <li><a href="{{ route('user.all') }}">ユーザー一覧</a></li>
      <li><a href="/">マイページ</a></li>
      <li><a href="{{ route('edit') }}">マイページ編集</a></li>
      <li><a href="/" id="logout">ログアウト</a></li>
    </ul>
  </div>
</nav>
<div class="toggle_btn">
  <span></span>
  <span></span>
  <span></span>
</div>
<div id="mask"></div>
<div class="box15 float">
    <div class="box-015">マイページ</div>
      <div class="mypage_wrapper float">
        <div class="mypage_img">
        <img src="{{ isset(Auth::user()->images) ? asset('storage/images/' . Auth::user()->images) : asset('images/human.png')  }}" alt="">
        </div>
        <div class="mypage_name top">{{ optional(Auth::user())->name }}</div>
        <div class="mypage_name float ">{{ optional(Auth::user())->email }}</div>
        <div class="_a"><a href="edit">変更する</a></div>
    </div><!---mypagecontent-->
      </div><!-- mypage_wrapper  -->
    </header>
     @else
      <a href="/top">topへ戻る</a>
      @endif
   </div>
   </form>
</div><!--timeline_width-->
@endsection