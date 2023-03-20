@extends('template')
@section('content')
<div class="bg_pattern Crown"></div>
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
    <dd><a href="reset">パスワードの再設定</a>
    </dd>
    <dd class="mypage_img"><input type="file" name="iconimage">
    <img src="{{ isset(Auth::user()->images) ? asset('storage/images/' . Auth::user()->images) : asset('images/human.png')  }}" alt=""></dd>
  </dl>
  <input type="submit" name="profileupdate" class="_a update" value="更新">
</form>
</header>
@endsection