@extends('template')
@section('content')
</header>
<section>
<div class="talk">
	<div class="talk_left">
    テキストテキスト
	</div>
  @foreach ($talks as $talk)
  <div class="talk_fixed">
  <li>{{$talk->created_at}}</li>
	<div class="talk_right">
    <ul class="ul_right">
		<li class="talk_text">{{ $talk->content }}</li>
  </ul>
</div>
</div><!--talk_fixed-->
@endforeach
</div>
</section>

  <footer class="footer">
      <form action="{{ route('talks.create')}}" method="post" class="talk_form">
        @csrf
        <div class="talk_wrapper">
        <input type="text" name="content" id="talk" class="search">
        <button type="submit" class="talk_btn"></button>
        </div>
      </form>
  </footer>
@endsection