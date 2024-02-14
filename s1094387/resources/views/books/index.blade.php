@extends('default')

@section('title')
    Books
@endsection

@section('content')
<section class="section__card__index">
    <section class="section__main__index">
        <h2 class="title">All books</h2>
        <ul id="BtnContainer">
            <li><button class="btn active" onclick="filterSelection('all')"> Show all</button></li>
            <li><button class="btn" onclick="filterSelection('Horror')"> Horror</button></li>
            <li><button class="btn" onclick="filterSelection('Sci-Fi')"> Sci-Fi</button></li>
            <li><button class="btn" onclick="filterSelection('Adventure')"> Adventure</button></li>
            <li><button class="btn" onclick="filterSelection('Other')"> Other</button></li>
        </ul>
        <section class="books__addButton">
            <a href="/books/create" class="u-button">Provide a book</a>
        </section>
        <ul class="card__index">
            @foreach($books as $book)
                @if($book->owner_id !=$user->id)
                    @include('books.components.bookCard--index')
                @endif
            @endforeach        
        </ul>
    </section>
</section>

<script src="/js/filter.js"></script>
@endsection