@extends('default')

@section('title')
    {{$users->name}}
@endsection

@section('content')
    @include('users.components.userCard--show')
@endsection