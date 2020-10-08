@extends('layouts.main-layout')
@section('content')

  <div class="card">
    <div class="card-header">
      <div>
        Posts
      </div>
      <div>
          <input id="best_of" type="checkbox" name="best_of">
          <label for="best_of">BEST OF</label>
      </div>
    </div>

    <div class="card-body">
      <ul id="posts">

      </ul>
    </div>
  </div>

@endsection
