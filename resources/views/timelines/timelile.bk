@extends('template')
@section('content')
<header class="header float top">
  <div class="timeline_width timeline_wrapper">
    <form action="timelines.serch" method="get" class="search_form">
      @csrf
      <input type="serch" placeholder="検索" name="search" class="search" value="@if (isset($search)) {{ $search }} @endif">
      <button type="submit" id="search_btn"></button>
      <div class="dropdown">
        <button class="btnB  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button"><a href="{{ route('posts.create') }}">投稿する</a></button>
          @if($checked_items)
          <?php foreach ($checked_items as $checked_item) : ?>
          <button class="dropdown-item" type="button"><a href="fixed">固定タイムライン</a></button>
          <?php endforeach;?>
            else:
          <div class="p-not_fav_items">
            お気に入りに登録されているページはありません。
          </div>
          @endif
          <button class="dropdown-item" type="button"><a href="talk_all">トーク</a></button>
          <button class="dropdown-item" type="button"><a href="mypage">マイページ</a></button>
    </form>
    @foreach($timeline as $timeline)
    <a href="{{ route('timelines.timeline', ['content' => $content-content]) }}">
        {{ $timeline->content }}
    </a>
    @endforeach
  </div><!--timeline_width-->
</header>
<section>
/*cookieを取得*/
  if(array_key_exists('fav_item', $_COOKIE)){
    $checked_items = $_COOKIE['fav_item'];
    $checked_items = json_decode($checked_items);
  }
  <ul class="timeline_wrapper">
    <li>
      <div class="timeline_content float">
      @foreach($timelines as $timeline)
        <div class="timeline_flex float">
          <img src="{{ asset('images/human.png') }}" alt="" class="timeline_img">
          <h3 class="user p">名前</h3>
          <div class="pin_img" data-pageid="<?php the_ID(); ?>">
          <img src="{{ asset('images/pin_white.png') }}" alt="" id="pin_img">
          </div>
        </div><!--timeline_flex-->
        <div class="composition p">{{ $timeline->post }}</div>
        <div class="line gap"></div>
        <img src="{{ asset('images/good.png') }}" alt="" class="good float">
        @endforeach
      </div>
    </li>
  </ul>
  </section>
@endsection