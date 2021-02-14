@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
    <table>
        <tr><th>id: </th><td>{{ $item->id }}</td></tr>
        <tr><th>name: </th><td>{{ $item->name }}</td></tr>
        <tr><th>mail: </th><td>{{ $item->mail }}</td></tr>
        <tr><th>age: </th><td>{{ $item->age }}</td></tr>
    </table>
@endsection

@section('footer')
    copyright 2021 tashiro.
@endsection
