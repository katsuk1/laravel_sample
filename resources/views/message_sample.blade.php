<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messageモデルの利用</title>
</head>
<body>
{{-- レイアウトファイルを指定 --}}
@extends('layouts.default')

{{-- @yield('content') の部分を穴埋め --}}
@section('content')

    <h1>Messageモデルの利用</h1>
    <p>
        {{ $message->name }}:
        {{ $message->body }}
    </p>
@endsection
</body>
</html>