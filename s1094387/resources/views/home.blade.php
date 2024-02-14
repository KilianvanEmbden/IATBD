@extends('default')

@section('title')
    Time2share
@endsection

@section('content')
@php $count = 0 @endphp
    <main class="home">
        <section class="home__addBook">
            <a href="/books/create" class="u-button">Provide a book</a>
        </section>
        <section class="home__main">

            <section class="section__card__index">
                <h2 class="title">Books</h2>
                <ul class="card__index">
                    @foreach($books as $book)
                        @if ($book->current_owner_id == $book->owner_id && $book->owner_id !=$user->id && $count < 4)
                            @include('books.components.bookCard--index')
                            @php $count++ @endphp
                        @endif
                    @endforeach
                    @php $count = 0 @endphp
                </ul>
                <a href="/books" class="u-button">See all</a>
            </section>

            <section class="section__card__index">
                <h2 class="title">Top Book Owners</h2>
                <ul class="card__index">
                    @foreach($owners as $owner)
                        @if ($count < 4)
                            @include('owner.components.ownerCard--index')
                            @php $count++ @endphp
                        @endif
                    @endforeach
                    @php $count = 0 @endphp
                </ul>
                <a href="/owners" class="u-button">See all</a>
            </section>

        </section>
    </main>
@endsection