<article class="card__show">
    <section class="card bookCard" data-genre-of-book="{{$book->genre}}">
        <h2 class="card__title">{{$book->name}} - {{$book->writer}}</h2>
        <section class="card__section">
            <figure class="card__figure">
            <img src="{{ asset('storage/' . $book->img) }}" alt="{{$book->name}}">
            </figure>
            <p  class="card__text">Genre: {{$book->genre}}</p>
            <p  class="card__text">Owner: {{$owner->name}}</p>
            <p  class="card__text">Avalible until: {{$book->return_date}}</p>
            <p  class="card__text card__description">{{$book->description}}</p>
            @if ($book->current_owner_id != $book->owner_id && $book->owner_id == $user->id)
                <form action="/books/{{$book->id}}" method="post">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="id" value="{{$book->id}}">
                    <button type="submit" class="u-button">Book was returned</button>
                </form>
            @elseif ($book->current_owner_id != $book->owner_id)
                <p class="alert">This book has been lent out.</p>
            @else
                <a href="/requests/{{$book->id}}/create" class="u-button">Request {{$book->name}}</a>
            @endif
        </section>
    </section>
</article>