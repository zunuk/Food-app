@extends('layouts.app')
@section('content')
<!DOCTYPE HTML>
<head>
    <meta chrset="UTF-8">
    <html lang="ja"/>
    <title>Management Top Page</title>
</head>
<body>
    <a href="/food/management/create/{{Auth::user()->id}}">食材の更新</a><br>
    <a href="/food/management/template">テンプレート</a><br>
    <a href="/food/top">トップ画面に戻る</a>
</body>
@endsection