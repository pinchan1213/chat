@extends('template')
@section('content') 
<header class="header_mypage">
  <div class="mypage_text">マイページ</div>
    <div class="mypage_wrapper">
    <form action="mypage" enctype="multipart/form-data" method="post">
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
    <dd><input type="text" name="rname" value="{{ Auth::user()->name }}"></dd>
    <dt>メールアドレス</dt>
    <dd><input type="text" name="email" value="{{ Auth::user()->email }}"></dd>
    <dt>パスワード</dt>
    <dd><input type="password" name="password"></dd>
    <dt>パスワード編集</dt>
    <dd><input type="password" name="newpassword"></dd>

    <dt></dt>
    <dd class="mypage_img"><input type="file" name="iconimage"><img src="{{asset('images/human.png')}}" alt=""></dd>
  </dl>
  <input type="submit" name="profileupdate" value="更新">
</form>
      <!-- <div class="mypage_name float top">{{ Auth::user()->name }}</div>    <div class="mypage_name float top">{{ Auth::user()->email }}</div>

    <div class="line float"></div>
        <ul class="btn_list">
            <li class="btn_item"><a href="talk_all">トーク</a></li>
            <li class="btn_item"><a href="main">タイムライン</a></li>
            <li class="btn_item"><a href="#">変更する</a></li>
        </ul>
    </div> -->
</header>
@endsection