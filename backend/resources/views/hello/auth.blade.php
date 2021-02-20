@extends('layouts.helloapp')

@section('title', 'ユーザー認証')

@section('menubar')
    @parent
    ユーザー認証ページ
@endsection

@section('content')
    <p>{{ $message }}</p>
    <form action="/hello/auth" method="post">
        <table>
            @csrf
            <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
            <tr><th>pass: </th><td><input type="text" name="password"></td></tr>
            <tr><th></th><td><input type="submit" name="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
    copyright 2021 tashiro.
@endsection
