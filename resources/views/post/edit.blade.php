@extends('layout')

@section('title')
投稿編集
@endsection

@section('content')
<h1>投稿編集</h1>
<form action="POST" class="pure-form pure-form-aligned">
  <div class="pure-control-group">
    @if ($errors->has('title'))
    <div class="errors"><p>{{ $errors->first('title') }}</p></div>
    @endif
    <label for="title">タイトル</label>
    <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}">
  </div>
  <div class="pure-control-group">
    @if ($errors->has('body'))
    <div class="errors"><p>{{ $errors->first('body') }}</p></div>
    @endif
    <label for="body">本文</label>
    <input type="text" id="body" name="body" value="{{ old('body', $post->body) }}">
  </div>
  <div class="pure-controls">
    <button type="submit" class="pure-button">変更</button>
  </div>
</form>
@endsection