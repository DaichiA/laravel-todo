<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Post</title>
  <link rel="stylesheet" href="{{ asset('css/try.css') }}">
</head>
<body>
  <h1>This is Post page!!</h1>
  <br>
  @isset($msg)
    <p>{{ $msg }}</p>
  @else
    <p>なんか書いてや</p>
  @endisset
  
  <form action="" method="POST">
    @csrf
    <label for="title">タイトル</label>
    <input type="text" name="title">

    <label for="desc">説明</label>
    <input type="text" name="desc">

    <label for="date">期限</label>
    <input type="text" name="date">

    <label for="notification">通知</label>
    <input type="checkbox" name="notification">

    <label for="location">場所</label>
    <select name="location" id="location">
      <option value="">北海道</option>
      <option value="">青森</option>
      <option value="">秋田</option>
      <option value="">岩手</option>
    </select>

    <input type="submit">
  </form>
  <a href="/">Home</a>
</body>
</html>