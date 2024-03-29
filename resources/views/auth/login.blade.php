@extends('template')
@section('content')
<body>
  <div class="back">
    <div class="content">
      <div class="form_flame">
      @if($errors->any())
       <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
        <form method="post" action="">
            @csrf
            <label class="text ">メールアドレス</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            @if (isset($login_error))
            <p>メールアドレスが一致しません</p>
            @endif
            <label class="text">パスワード</label>
            <input type="text" name="password" id="password">
            <input type="submit" value="ログイン" class="btn" >
          </form>
          <a href="reset">パスワードをお忘れの方はこちらから</a>
      </div><!--form_flame-->
    </div><!--content-->
  </div>
  @endsection

