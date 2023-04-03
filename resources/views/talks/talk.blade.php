@extends('template')
@section('content')
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
     @else
      <a href="/top">topへ戻る</a>
      @endif
   </div>
   </form>
</div><!--timeline_width-->
</header>
<section>
  <div class="talk scroll">
    <!-- 相手側 -->
    @foreach($talks as $talk)
    @if($talk->user_id != Auth::user()->id)
    <div class="balloon-009">
      <!-- ユーザー側プロフィール、名前表示 -->
      <img src="{{ isset($partner_info->images) ? asset('storage/images/' . $partner_info->images) : asset('images/human.png')  }}" alt="" class="timeline_img fix">
      <h3 class="user p fixUser">{{ $partner_info->name }}</h3>
      <p>{{ $talk->message }}</p>
      <li>{{$talk->created_at->format('H:i')}}</li>
    </div>
    @else
    <!-- 自分側 -->
      <div class="talk_fixed">
        <li>{{$talk->created_at->format('H:i')}}</li>
        <div class="balloon-010">
          <ul class="ul_right">
            <li class="talk_text">{{ $talk->message }}</li>
          </ul>
        </div>
      </div><!--talk_fixed-->
    @endif
    @endforeach
  </div>
</section>


<footer class="footer">
  <form action="{{ route('talks.create')}}" method="post" class="talk_form">
    @csrf
    <div class="talk_wrapper">
      <input type="text" name="message" id="talk" class="search">
      <button type="submit" class="talk_btn"></button>
    </div>
    <input type="hidden" name="partner_id" value="{{ $partner_info->id }}">
  </form>
</footer>
@endsection



{{--
@foreach ($chats as $chat)
    <li class="text-xs @if($chat->user_identifier == $user['identifier']) text-right @endif">
      {{$chat->created_at->format('H:i')}} {{$chat->user_name}}
    </li>
    <li class="w-max max-w-full break-words mb-3 p-2 balloon1-right rounded-lg bg-blue-200 relative 
      @if($chat->user_identifier == $user['identifier']) 
        self ml-auto @else other 
      @endif">
      {{$chat->message}}
    </li>
@endforeach--}}