<li class="card adminCard">
    <a href="/books/{{$book->id}}">
    <p class="card__text">{{$book->name}}</p>
    <p class="card__text">{{$book->genre}}</p>
    <form action="/admin" method="post">
        @csrf
        @method('delete')
        <input type="hidden" name="id" value="{{$book->id}}">
        <button type="submit" class="u-button">Delete</button>
    </form>
    </a>
</li>