@extends('default')

@section('title')
    {{$owner->name}}
@endsection

@section('content')
    @include('owner.components.ownerCard--show')
    <section class="section__card__index">
        <section class="section__main__index">
            @if(count($books) == 0)
            <article class="card card_empty">
                <h2 class="title">User has no reviews yet</h2>
            </article>
            @else
            <h2 class="title">{{$owner->name}}'s books</h2>
                <ul class="card__index">
                    @foreach($books as $book)
                        @include('books.components.bookCard--index')
                    @endforeach
                </ul>
            @endif
        </section>
        <section class="section__main__index">
            @if(count($reviews) == 0)
            <article class="card card_empty">
                <h2 class="title">User has no reviews yet</h2>
            </article>
            @else
            <h2 class="title">{{$owner->name}}'s reviews</h2>
                <ul class="card__index">
                    @foreach($reviews as $review)
                        @include('reviews.components.reviewCard--index')
                    @endforeach
                </ul>
            @endif
        </section>
    </section>
@endsection