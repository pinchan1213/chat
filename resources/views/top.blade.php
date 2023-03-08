@extends('template')
@section('content')
  <div class="back">
      <main class="main">
        <div class="logo">
        <img src="{{ asset('/images/logo.png') }}"alt="">
      </div><!--logo-->
      <div class="btn_list">
        <a href="register" class="btn">新規登録</a>
        <a href="login" class="btn">ログイン</a>
        </div>
    </main>
  </div><!--back-->
  @endsection
