<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/try.css') }}">
  {{-- <link rel="stylesheet" href="css/try.css"> --}}
</head>
<body>
  <h1>このページに投稿したtodoを一覧でリスト表示させる</h1>
  <p>{{ $value }}</p>
  <br>
  <table>
    <tr>
      <th>name</th>
      <th>mail</th>
      <th>age</th>
    </tr>
    @foreach ($items as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->mail }}</td>
        <td>{{ $item->age }}</td>
      </tr>
    @endforeach
    <a href="post">postページへ移動</a>
  </table>
</body>
</html>