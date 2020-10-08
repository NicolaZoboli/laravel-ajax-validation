@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post create:</div>

                <div class="card-body">
                  <form action="{{ route('post.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                      <label for="title">TITLE: </label><br>
                      <input type="text" class="@error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                      @error('title')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="body">BODY: </label><br>
                      <input type="text" class="@error('body') is-invalid @enderror" name="body" value="{{ old('body') }}">
                        @error('body')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="like">LIKE: </label><br>
                      <input type="number" class="@error('like') is-invalid @enderror" name="like" value="{{ old('like', 0) }}">
                        @error('like')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="dislike">DISLIKE: </label><br>
                      <input type="number" class="@error('dislike') is-invalid @enderror" name="dislike" value="{{ old('dislike', 0) }}">
                        @error('dislike')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="tag">TAG: </label><br>
                      <input type="text" class="@error('tag') is-invalid @enderror" name="tag" value="{{ old('tag') }}">
                        @error('tag')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary" type="submit">SAVE</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
