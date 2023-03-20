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
      @foreach($displays as $display)
      <div class="timeline float" data-user-id="{{ Auth::user()->id }}">
        <div class="timeline_flex float" ">
        <img src="{{ isset(Auth::user()->images) ? asset('storage/images/' . Auth::user()->images) : asset('images/human.png')  }}" alt="" class="timeline_img fix">
          <h3 class="user p fixUser">{{ Auth::user()->name }}</h3>
          <div class="pin_img">
            <button class="js_fix" data-timeline_id="{{ $timeline->id }}">
            <i class="fa-solid fix fa-thumbtack" data-id="{{ $timeline->id }}"></i>
            </button>
          </div>
        </div><!--timeline_flex-->
        <div class="composition p ">{{ $timeline->post }}</div>
        <div class="line gap"></div>
        <img src="{{ asset('images/good.png') }}" alt="" class="good float">
        @endforeach
      </div>
      </div><!--timeline_content-->
    </li>
  </ul>
  </section>




































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