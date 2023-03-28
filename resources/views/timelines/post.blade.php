@extends('template')
@section('content')
<div class="bg_pattern Rectangles"></div>
<header>
<div class="timeline_width timeline_wrapper">
    <form method="post" class="search_form">
      <!-- <form action="" method="get" class="search_form"> -->
        <div id="navArea">
      @if(Auth::check())
<nav>
  <div class="inner">
    <ul>
      <li><a href="{{ route('posts.create') }}">投稿する</a></li>
      <li><a href="timeline">タイムライン</a></li>
      <li><a href="fixed">固定タイムライン</a></li>
      <li><a href="{{ route('user.all') }}">ユーザー一覧</a></li>
      <li><a href="/">マイページ</a></li>
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
     @else
      <a href="/top">topへ戻る</a>
      @endif
   </div>
   </form>
</div><!--timeline_width-->
</header>
<main>
  <div class="timeline_content top">
  <div class="float top box-014">
    <div class="timeline_flex float">
      <div class="timelineImage">
    <img src="{{ isset(Auth::user()->images) ? asset('storage/images/' . Auth::user()->images) : asset('images/human.png')  }}" alt="">
    </div>
      <h3 class="user p">{{ Auth::user()->name }}</h3>
    </div>
    <div class="timeline_wrapper">
    </div><!--timeline_wrapper-->
    <form action="{{ route('posts.create')}}" method="post">
      {{ csrf_field() }}
      <input type="text" class="form-control" name="post" id="title" value="{{ old('post') }}" />


      <!-- 投稿ボタン実装 -->
      
      <button type="submit" class="move_btn">投稿する</button>
    </form>
    </div><!--timeline_conrent-->
</main>
@endsection