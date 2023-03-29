@extends('template')
@section('content')
<div class="bg_pattern Lines_v4"></div>
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
      <li><a href="timeline">タイムライン</a></li>
      <li><a href="fixed">固定タイムライン</a></li>
      <li><a href="{{ route('user.all') }}">ユーザー一覧</a></li>
      <li><a href="talk">トーク</a></li>
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

<section>
  <ul class="timeline_wrapper">
    <li>
      <div class="timeline_content">
      @foreach($timelines as $timeline)
      <div class="timeline float" data-user-id="{{ Auth::user()->id }}">
        <div class="timeline_flex float" ">
        <!-- プロフィール写真  -->
        <img src="{{ isset($timeline->images) ? asset('storage/images/' . $timeline->images) : asset('images/human.png')  }}" alt="" class="timeline_img fix">
          <h3 class="user p fixUser">{{ $timeline->name }}</h3>
          <div class="pin_img">
            <button class="js_fix" data-timeline_id="{{ $timeline->id }}">
            <i class="fa-solid fix fa-thumbtack {{ isset($timeline->timeline_id) ? 'font-color-red' : '' }}" data-id="{{ $timeline->id }}"></i>
            </button>
          </div>
        </div><!--timeline_flex-->
        <div class="composition p ">{{ $timeline->post }}</div>
        @if (Auth::check()) 
          <a href="{{ route('timeline.edit',['post' => $timeline->id]) }}">編集する</a>
          @else
            編集する権限がありません。
            @endif
        <div class="line gap"></div>
        <div class="float"></div>
        @endforeach
      </div>
      </div><!--timeline_content-->
    </li>
  </ul>
  </section>
@endsection