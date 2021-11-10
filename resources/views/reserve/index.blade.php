@extends('layouts.helloapp')

@section('title','Reserve.index')
    @section('menubar')
        @parent
        会員情報
    @endsection
    @section('content')
    <table>
        <tr><th>Reserve</th></tr>
        <tr><th>ID</th><th>name</th><th>tel</th></tr>
        @foreach ($items as $item)
            <tr><td>{{$item->getData()}}</td></tr>
        @endforeach
    </table>
    @endsection

    @section('footer')
        copyright 2020 tuyano.
    @endsection

