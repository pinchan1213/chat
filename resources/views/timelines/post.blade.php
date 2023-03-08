@extends('template')
@section('content')
<header>

</header>
<main>
  <div class="timeline_content float top">
    <div class="timeline_flex float">
      <img src="{{ asset('images/human.png') }}" alt="" class="timeline_img">
      <h3 class="user p">名前</h3>
    </div>
    <div class="timeline_wrapper">
      <div class="composition p">
      </div><!--composition-->
    </div><!--timeline_wrapper-->
    <form action="{{ route('timelines.create')}}" method="post">
      {{ csrf_field() }}
      <input type="text" class="form-control" name="post" id="title" value="{{ old('post') }}" />
      <button type="submit" class="move_btn">投稿する</button>
      <div class="line gap"></div>
    </form>
</main>
@endsection