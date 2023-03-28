@extends('template')
@section('content')
  <div class="back">
      <main class="main">
        <div class="logo">
        <img src="{{ asset('/images/logo.png') }}"alt="">
      </div><!--logo-->
      <div class="btn_list">
        <a href="register" class="btn_06"><span>新規登録</span></a>
        <a href="login" class="btn_06"><span>ログイン</span> </a>
        </div>
    </main>
  </div><!--back-->
  @endsection
