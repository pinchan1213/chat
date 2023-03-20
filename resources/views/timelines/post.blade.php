@extends('template')
@section('content')
<div class="bg_pattern Rectangles"></div>
<header>
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
      @else
      <a href="top">topへ戻る</a>
      @endif
      </div>
    </form>
  </div><!--timeline_width-->
</header>
<main>
  <div class="timeline_content">
  <div class="float top box-014">
    <div class="timeline_flex float">
      <img src="{{ asset('images/human.png') }}" alt="" class="timeline_img">
      <h3 class="user p">{{ Auth::user()->name }}</h3>
    </div>
    <div class="timeline_wrapper">
    </div><!--timeline_wrapper-->
    <form action="{{ route('posts.create')}}" method="post">
      {{ csrf_field() }}
      <input type="text" class="form-control" name="post" id="title" value="{{ old('post') }}" />
      <button type="submit" class="move_btn">投稿する</button>
    </form>
    </div><!--timeline_conrent-->
</main>
@endsection