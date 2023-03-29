@extends('template')
@section('content')
<div class="bg_pattern Paper"></div>
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
    <div class="sample_box11">
    <div class="sample_box11_tape"> </div>
    <div class="container">
    <section>
<table class="table">
  <div class="user_group">
    @foreach($users as $user)
      <tr>
        <td>
          <img src="{{ isset($user->images) ? asset('storage/images/' . $user->images) : asset('images/human.png')  }}" alt="" class="timeline_img fix">
            </td>
            <td><a href="{{ route('talks', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
        </tr>
        <!-- <div class="line gap"></div> -->
        @endforeach
      </div><!--user_group-->
    </div>
</table>
</section>
</div>
@endsection