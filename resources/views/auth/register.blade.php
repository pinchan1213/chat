@extends('template')
@section('content')
  <div class="back">
    <div class="content">
      <div class="form_flame">
        <form action="" method="post">
            @csrf
            <label class="text">メールアドレス</label>
            <input type="text" name="email" id="email">
            <label class="text">パスワード</label>
            <input type="text" name="password" id="password">
            <label class="text">確認用パスワード</label>
            <input type="text" name="password" id="password">
            <input type="submit" value="送信する" class="btn" >
          </form>
      </div><!--form_flame-->
    </div><!--content-->
  </div>
@endsection
