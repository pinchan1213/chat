@extends('template')
@section('content')
<header class="header float top">
  <div class="timeline_width timeline_wrapper">
          <form method="post" class="search_form">
            <input type="text" placeholder="検索" class="search">
            <button type="submit" id="search_btn"></button>
            <div class="dropdown">
              <button class="btnB  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button"><a href="post">投稿する</a></button>
                <button class="dropdown-item" type="button"><a href="fixed">固定タイムライン</a></button>
                <button class="dropdown-item" type="button"><a href="talk_all">トーク</a></button>
                <button class="dropdown-item" type="button"><a class="dropdown-item" href="{{route('mypage')}}">マイページ</a></button>
                </form>
                </div><!--timeline_width-->
                </header>
                

    <ul class="timeline_wrapper">
    <li>
        <div class="timeline_content float">
          <div class="timeline_flex float">
              <img src="{{ asset('images/human.png') }}" alt="" class="timeline_img">
                  <h3 class="user p">名前</h3>
                  <img src="{{ asset('images/pin_white.png') }}" alt="" id="pin_img">
                </div><!--timeline_flex-->
                  <div class="composition p">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
                  <div class="line gap"></div>
                  <img src="{{ asset('images/good.png') }}" alt="" class="good">
          </div>
          <div class="list-group">
            @foreach($timelines as $timeline)
              <a href="{{ route('timelines.index', ['id' => $timeline->id]) }}" class="list-group-item">
                {{ $timeline->text }}
              </a>
            @endforeach
          </div>
      </li>
    </ul>
@endsection