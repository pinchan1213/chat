@extends('template')
@section('content')
<header class="header float top">
  <div class="timeline_width timeline_wrapper">
          <form action="" method="get" class="search_form">
            <input type="text" placeholder="トーク検索" class="search">
            <button type="submit" id="search_btn"></button>
            <div class="dropdown">
              <button class="btnB  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button"><a href="main">タイムライン</a></button>
                <button class="dropdown-item" type="button"><a class="dropdown-item" href="{{route('mypage')}}">マイページ</a></button>
          </form>
        </div>
     </div>
        </div><!--timeline_width-->
    </header>
    <section>

<table class="table">
    <tbody>
        <tr>
            <td><img src="{{ asset('images/human.png') }}"  alt="" width="50px"></td>
            <td>名前</td>
            <td>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</td>
          </tr>
          <tr>
            <td><img src="{{ asset('images/human.png') }}" class="img-fluid" alt=""></td>
            <td>名前</td>
            <td>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</td>
          </tr>
          <tr>
            <td><img src="{{ asset('images/human.png') }}" class="img-fluid" alt=""></td>
            <td>名前</td>
            <td>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</td>
        </tr>
    </tbody>
</table>
    </section>
@endsection