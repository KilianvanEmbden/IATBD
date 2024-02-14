<li class="card adminCard">
    <a href="/owners/{{$person->id}}">
    <p class="card__text">{{$person->name}}</p>
    <p class="card__text">{{$person->email}}</p>
    <form action="/admin" method="post">
        @csrf
        @method('patch')
        <input type="hidden" name="id" value="{{$person->id}}">
        <button type="submit" class="u-button">
            @if($person->blocked == false)
                Blokkeren
            @else
                Deblokkeren
            @endif
        </button>
    </form>
    </a>
</li>