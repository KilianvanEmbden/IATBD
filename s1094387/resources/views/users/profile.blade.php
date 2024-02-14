@extends('default')

@section('title')
    {{$user->name}}
@endsection

@section('content')
    <section class="profile">
        <section class="profile__section">
            <h2 class="title">Your profile</h2>
            @include('users.components.userCard--show')
            @if ($errors->any())
                <section class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </section>
            @endif
        <section class="section__card__index">
            @if(!empty($books))
            <h2 class="title">Your books</h2>
            <ul class="card__index">
                @foreach($books as $book)
                    @include('books.components.bookCard--index')
                @endforeach
            </ul>
            @else
                <h2>You have no books yet</h2>
            @endif
        </section>

        @if(count($reviews) == 0)
            <h2 class="title">No reviews yet</h2>
            @else
            <h2 class="title">Your reviews</h2>
                <ul class="card__index">
                    @foreach($reviews as $review)
                        @include('reviews.components.reviewCard--index')
                    @endforeach
                </ul>
            @endif


    </section>
@endsection