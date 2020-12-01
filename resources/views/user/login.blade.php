@extends('layouts.main')

@section('title','login')

@section('content')
    <form action="" name="login" method="post">
        {{ csrf_field() }}
        账号：<input type="text" name="username">
        密码：<input type="text" name="password">
        <button type="submit">提交</button>
    </form>
@endsection
