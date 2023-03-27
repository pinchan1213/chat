@extends('template')
@section('content')
<div class="bg_pattern Lines_v4"></div>
<header class="header float top">
  <div class="timeline_width timeline_wrapper">
    <form action="" method="post" class="search_form">
      @csrf
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
    </form>
      @else
      <a href="top">topへ戻る</a>
      @endif
      </div>
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
            <i class="fa-solid fix fa-thumbtack" data-id="{{ $timeline->id }}"></i>
            </button>
          </div>
        </div><!--timeline_flex-->
        <div class="composition p ">{{ $timeline->post }}</div>
        <div class="line gap"></div>
        @endforeach
      </div>
      </div><!--timeline_content-->
    </li>
  </ul>
  </section>
@endsection