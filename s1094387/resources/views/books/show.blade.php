@extends('default')

@section('title')
    {{$book->name}}
@endsection

@section('content')
    @include('books.components.bookCard--show')
@endsection