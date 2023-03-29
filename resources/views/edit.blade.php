@extends('template')
@section('content')
<div class="bg_pattern Crown"></div>
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
<div class="background"></div>
<div class="box-015">マイページ</div>
    <div class="mypage_wrapper">
    <form action="{{ route('edit') }}" enctype="multipart/form-data" method="post">
      @csrf
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
   @endif
   <dl class="UserProfile">
    <dt>名前</dt>
    <dd><input type="text" name="name" value="{{ Auth::user()->name }}"></dd>
    <dt>メールアドレス</dt>
    <dd><input type="text" name="email" value="{{ Auth::user()->email }}"></dd>
    <dd><a href="email">パスワードの再設定</a>
    </dd>
    <dd class="mypage_img"><input type="file" name="iconimage">
    <img src="{{ isset(Auth::user()->images) ? asset('storage/images/' . Auth::user()->images) : asset('images/human.png')  }}" alt=""></dd>
  </dl>
  <input type="submit" name="profileupdate" class="_a update" value="更新">
</form>
</header>
@endsection