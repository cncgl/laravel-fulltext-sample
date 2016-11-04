@extends('layout')

@section('title')
投稿一覧表示
@endsection

@section('content')
  <h1>ユーザー一覧表示</h1>
  <table class="pure-table pure-table-horizontal">
    <thead>
    <tr>
      <th>ID</th>
      <th>タイトル</th>
      <th>本文</th>
    </tr>
    </thead>
    <tbody>
      @forelse($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
      </tr>
      @empty
      <tr>
        <td></td>
        <td>レコード未登録</td>
        <td></td>
      </tr>
      @endforelse
    </tbody>
  </table>
@endsection