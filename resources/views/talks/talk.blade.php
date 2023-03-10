@extends('template')
@section('content')
</header>
<section>
<div class="talk">
	<div class="talk_left">
		<p></p>
	</div>
	<div class="talk_right">
  @foreach ($talks as $talk)
		<p>{{ $talk->content }}</p>
	</div>
</div>
</section>

  <footer class="footer">
      <form action="{{ route('talks.create')}}" method="post" class="talk_form">
        @csrf
        <div class="talk_wrapper">
        <input type="text" id="talk" class="search">
        <button type="submit" class="talk_btn"></button>
        @endforeach
        </div>
      </form>
  </footer>
@endsection