{{-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Post</title>
    <link rel="stylesheet" href="{{ asset('css/try.css') }}">
</head>
<body> --}}

@extends('layouts.template')

@section('title', 'edit画面やで')

@section('content')
    <br>
    @isset($msg)
        <p>{{ $msg }}</p>
    @else
        <p>なんか書いてや</p>
    @endisset

    <form action="" method="POST">
        @csrf
        <input type="hidden" name="id" value="<?php  echo $form->id ?? ''; ?>">

        <label for="title">件名</label>
        <input type="text" name="title" value="<?php  echo $form->title ?? ''; ?>">

        <label for="description">説明</label>
        <input type="text" name="description" value="<?php  echo $form->description ?? ''; ?>">

        <label for="expire_at">期限</label>
        <input type="text" name="expire_at" value="<?php  echo $form->expire_at ?? ''; ?>">

        <label for="location">場所</label>
        <input type="text" name="location" value="<?php  echo $form->location ?? ''; ?>">

        <label for="notification">通知</label>
        <input type="checkbox" id="notice-check" name="notification" value="<?php  echo $form->notification ?? ''; ?>">

        <input type="hidden" name="register" value=1>
        <input type="submit">
    </form>
    <a href="/">Home</a>
@endsection