@extends('template')
@section('content')
<header class="header float top">
<div class="timeline_width timeline_wrapper">
          <form action="" method="get" class="search_form">
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
      @else
      <a href="top">topへ戻る</a>
      @endif
      </div>
    </form>
  </div><!--timeline_width-->
    </header>
    <div class="container">
    <section>
<table class="table">
    <div class="user_group">
      foreach($users as $user)
        <tr>
            <td><img src="{{ asset('images/human.png') }}"  alt="" width="50px">{{ $user->images }}</td>
            <td>{{ $user->user_id }}</td>
            <td><a href="{{ route('talk', ['id' => $users->id]) }}" class="{{ $partne_id === $user->id ? 'active' : '' }}"><td>
        </tr>
     </div>
</table>
</section>
</div>
@endsection