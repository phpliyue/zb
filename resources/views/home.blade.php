@extends('layout.base')
@section('title','概况')
@section('navbar')
@parent
@section('home','active')
@endsection
@section('content')

@endsection
@section('js')
    @parent
    <script>
        // alert(window.screen.height)
    </script>
@endsection