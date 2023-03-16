@extends('template')
@section('content') 
<header class="header_mypage">
  <div class="mypage_text">マイページ</div>
    <div class="mypage_wrapper">
      <div class="mypage_img ">
      <img src="{{ isset(Auth::user()->images) ? asset('storage/images/' . Auth::user()->images) : asset('images/human.png')  }}" alt="">
      </div>
      <div class="mypage_name float top">{{ Auth::user()->name }}</div>    <div class="mypage_name float top">{{ Auth::user()->email }}</div>
    <div class="line float"></div>
        <ul class="btn_list">
            <li class="btn_item"><a href="talk_all">トーク</a></li>
            <li class="btn_item"><a href="main">タイムライン</a></li>
            <li class="btn_item"><a href="edit">変更する</a></li>
        </ul>
    </div>
</header>
@endsection