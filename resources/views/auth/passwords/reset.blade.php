@extends('template')
@section('content')
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
        <form action="email" method="get">
            @csrf
            <label class="text ">ユーザーネーム</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            <label class="text">メールアドレス</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            <label class="text">パスワード</label>
            <input type="text" name="password" id="password">
            <label class="text">確認用パスワード</label>
            <input type="text" name="password_confirmation" id="password-confirm">
            <input type="submit" value="送信する" class="btn" >
          </form>
      </div><!--form_flame-->
    </div><!--content-->
  </div>
@endsection
