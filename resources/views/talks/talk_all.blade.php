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
    <tbody>
        <tr>
            <td><img src="{{ asset('images/human.png') }}"  alt="" width="50px"></td>
            <td>名前</td>
            <td>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</td>
          </tr>
          <tr>
            <td><img src="{{ asset('images/human.png') }}" class="img-fluid" alt=""></td>
            <td>名前</td>
            <td>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</td>
          </tr>
          <tr>
            <td><img src="{{ asset('images/human.png') }}" class="img-fluid" alt=""></td>
            <td>名前</td>
            <td>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</td>
        </tr>
    </tbody>
</table>
</section>
</div>
@endsection