@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Top Page</title>
</head>
<body>
    <a href="/food/management">食材を更新する</a><br>
    <a href="/food/menu/search">献立検索</a><br>
    <a href="/food/blog/index">ブログ一覧</a><br>
    <a href="/food/blog/create">ブログを投稿する</a>
</body>
@endsection