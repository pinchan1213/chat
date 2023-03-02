@extends('template')
@section('content')
<header class="header float top">
  <div class="timeline_wrapper search_form">
          <div class="fixed_title">固定タイムライン一覧</div>
          <div class="dropdown">
              <button class="btnB  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button"><a href="timeline">タイムライン</a></button>
                <button class="dropdown-item" type="button"><a href="talk_all">トーク</a></button>
                <button class="dropdown-item" type="button"><a href="mypage">マイページ</a></button>
        </div><!--timeline_width-->
    </header>


<ul class="timeline_wrapper">
<li>
    <div class="timeline_content float">
      <div class="timeline_flex float">
        <img src="{{ asset('images/human.png') }}" alt="" class="timeline_img">
          <h3 class="user p">名前</h3>
          <img src="{{ asset('images/pin_red.png') }}" alt="" id="pin_img">
        </div>
          <div class="composition p">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
          <div class="line gap"></div>
          <button><img src="{{ asset('images/good.png') }}" alt="" class="good"></button>
      </div>
  </li>


  <li>
    <div class="timeline_content float">
      <div class="timeline_flex float">
        <img src="{{ asset('images/human.png') }}" alt="" class="timeline_img">
          <h3 class="user p">名前</h3>
          <img src="{{ asset('images/pin_red.png') }}" alt="" id="pin_img">
        </div>
          <div class="composition p ">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
          <div class="line gap"></div>
          <button><img src="{{ asset('images/good.png') }}" alt="" class="good"></button>
      </div>
  </li>


  <li>
    <div class="timeline_content float">
      <div class="timeline_flex float">
         <img src="{{ asset('images/human.png') }}" alt="" class="timeline_img">
          <h3 class="user p">名前</h3>
          <img src="{{ asset('images/pin_red.png') }}" alt="" id="pin_img">
        </div>
          <div class="composition p">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div>
          <div class="line gap"></div>
          <button><img src="{{ asset('images/good.png') }}" alt="" class="good"></button>
      </div>
  </li>
</ul>
@endsection