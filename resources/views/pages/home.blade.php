@extends('layouts.main-layout')
@section('content')
    <br>
    <a class="btn btn-primary" href="{{route('postcard.create')}}"> Create New Post</a><br><br>
    <div id="app">
        <postcard-component></postcard-component>
    </div>
@endsection