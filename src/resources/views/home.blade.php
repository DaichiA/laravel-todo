@extends('layouts.template')

@section('title', 'home画面やで')
    
@section('content')

    <table>
        <tr>
            <th>件名</th>
            <th>説明</th>
            <th>期限</th>
            <th>場所</th>
            <th>通知</th>
            <th>編集</th>
            <th>削除</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->expire_at }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->notification }}</td>
                <td>
                    <form action="/edit">
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        {{-- <input type="hidden" name='edit' value=1> --}}
                        <input type="submit" class='edit-btn' value="編集">
                    </form>
                </td>
                <td>
                    <form action="" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <input type="hidden" name='delete' value=1>
                        <input type="submit" class='del-btn' value="削除">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
  <a href="post">postページへ移動</a>
@endsection

@section('footer')
  {{-- <script src="{{ asset('/js/post.js') }}"></script> --}}
  <p>フッターです。</p>
@endsection