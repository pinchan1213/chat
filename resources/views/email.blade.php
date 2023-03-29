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
        <form action="{{ route('password.email') }}" method="post">
            @csrf
            <label class="text">メールアドレス</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            <input type="submit" value="送信する" class="btn_04" >
          </form>
      </div><!--form_flame-->
    </div><!--content-->
  </div>
@endsection
