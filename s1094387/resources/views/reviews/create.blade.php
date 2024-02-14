@extends('default')

@section('title')
    Review
@endsection

@section('content')
    <section class="review">
        <h2>Write a review on: {{$reviewed->name}}</h2>
        <form action="/reviews/create" method="post" class="form">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{$reviewed->id}}">
            <input type="hidden" name="name" id="name" value="{{$user->name}}">
            <section  class="form_input">
                <label for="title">title:</label>
                <input type="text" name="title" id="title">
            </section>
            <section  class="form__input">
                <label for="comment" class="u-label-vert-align-top">Message:</label>
                <textarea name="comment" id="comment" placeholder="Type here..."></textarea>
            </section>
            <section  class="form__input">
                <label for="stars">Rating</label>
                <select name="stars" id="stars">
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select>
            </section>
            <section  class="form__input">
                <button type="submit" class="u-button">Send</button>
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