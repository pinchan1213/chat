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
      <form action="{{ route('password.update') }}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}" />
        <label class="text">メールアドレス</label>
        <input type="text" name="email" id="email">
        <label class="text">パスワード</label>
        <input type="text" id="password" name="password">
        <label class="text">確認用パスワード</label>
        <input type="text" id="password-confirm" name="password_confirmation">
        <input type="submit" value="送信する" class="btn_04">
      </form>
    </div><!--form_flame-->
  </div><!--content-->
</div>
@endsection