@extends('template')
@section('content')
<header class="header_mypage">
  <div class="mypage_text">マイページ</div>
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
    <dt>パスワード</dt>
    <dd><input type="password" name="password"></dd>
    <dt>パスワード編集</dt>
    <dd><input type="password" name="newpassword"></dd>

    <dt></dt>
    <dd class="mypage_img"><input type="file" name="iconimage">
    <img src="{{ isset(Auth::user()->images) ? asset('storage/images/' . Auth::user()->images) : asset('images/human.png')  }}" alt=""></dd>
  </dl>
  <input type="submit" name="profileupdate" value="更新">
</form>
</header>
@endsection