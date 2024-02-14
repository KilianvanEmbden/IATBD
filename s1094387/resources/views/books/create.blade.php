@extends('default')

@section('title')
    Book
@endsection

@section('content')
<section class="form_section">
    <section class="form">
        <h2 class="bookCreate__title">Book info</h2>
        @if ($errors->any())
            <section class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </section>
        @endif
        <form action="/books/create" method="post" enctype="multipart/form-data">
            @csrf
            <section class="form__input">
                <label for="name">Title: </label>
                <input type="text" name="name" id="name" />
            </section>
            <section class="form__input">
                <label for="writer">Writer: </label>
                <input type="text" name="writer" id="writer" />
            </section>
            <section class="form__input">
                <label for="genre">Genre: </label>
                <input type="text" name="genre" id="genre" />
            </section>
            <section class="form__input">
                <label for="img">Image: </label>
                <input type="file" name="img" id="img" />
            </section>
            <section class="form__input">
                <label for="return_date">Return date: </label>
                <input type="date" name="return_date" id="return_date" value="{{ date('Y-m-d') }}"/>
            </section>
            <section class="form__input">
                <label for="description" class="u-label-vert-align-top">Description </label>
                <textarea name="description" id="description" placeholder="Type here..."></textarea>
            </section>
            <section class="form__input">
                <button class="u-button" type="submit">Create Book</button>
            </section>
        </form>
    </section>
</section>
@endsection