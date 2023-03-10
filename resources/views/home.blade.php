@extends('template')
@section('content')
<header class="header float top">
  <div class="timeline_width timeline_wrapper">
    <form method="post" class="search_form">
      <div class="dropdown">
        <button class="btnB  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button"><a href="{{ route('posts.create') }}">投稿する</a></button>
          <button class="dropdown-item" type="button"><a href="fixed">固定タイムライン</a></button>
          <button class="dropdown-item" type="button"><a href="talk_all">トーク</a></button>
          <button class="dropdown-item" type="button"><a href="mypage">マイページ</a></button>
          <button class="dropdown-item" type="button"><a href="#" id="logout">ログアウト</a></button>
          <form id="logout-form" action="{{ route('top') }}" method="POST" style="display: none;">
          @csrf
        </form>
    </form>
  </div><!--timeline_width-->
</header>
<script>
    document.getElementById('logout').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
  </script>
  @endsection