@extends('default')

@section('title')
    Request
@endsection

@section('content')
    <section class="reqCreate">
        <h2 class="title">Request {{$receiver->name}}'s book</h2>
        <form class="form" action="/requests/create" method="post">
            <h2>{{$book->name}}</h2>
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{$sender->id}}">
            <input type="hidden" name="owner_id" id="owner_id" value="{{$receiver->id}}">
            <input type="hidden" name="book_id" id="book_id" value="{{$book->id}}">
            <input type="hidden" name="name" id="name" value="{{$sender->name}}">
            <section class="form__input">
            </section>
            <section class="form__input">
                <label for="return_date">Return date:</label>
                <input type="date" name="return_date" id="return_date"
                    value="{{$book->return_date}}"
                    min="<?php echo date('Y-m-d'); ?>"
                    max="{{$book->return_date}}">
            </section>
            <section class="form__input">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="{{$sender->email}}">
            </section>
            <section class="form__input">
                <label for="phone_number">Phone:</label>
                <input type="tel" name="phone_number" id="phone_number" value="{{$sender->phone_number}}">
            </section>
            <section class="form__input">
                <label for="comment" class="u-label-vert-align-top">Message:</label>
                <textarea name="comment" id="comment" placeholder="I whould like to borrow this book."></textarea>
            </section>
            <section class="form__input">
                <button type="submit" class="u-button">Send request</button>
            </section>
            @if ($errors->any())
                <section class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </section>
            @endif
        </form>
    </section>
@endsection