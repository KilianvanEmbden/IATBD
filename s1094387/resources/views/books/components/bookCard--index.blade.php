<li class="card bookCard {{$book->genre}}" data-genre-of-book="{{$book->genre}}">
    <a href="/books/{{$book->id}}">
        <h2 class="card__title">{{$book->name}}</h2>
        <section class="card__section">
            <figure class="card__figure">
                <img src="{{ asset('storage/' . $book->img) }}" alt="{{$book->name}}">
            </figure>
            <p class="card__text">Genre: {{$book->genre}}</p>
            <p class="card__text">Return by: {{$book->return_date}}</p>
            @if ($book->owner_id != $book->current_owner_id)
            <p class="alert">This book has been lent out.</p>
            @endif
        </section>
    </a>
</li>