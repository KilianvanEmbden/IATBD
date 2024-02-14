<li class="card">
    <a href="/owners/{{$owner->id}}">
        <h2 class="card__title">{{$owner->name}}</h2>
        <section class="card__section">
            <figure class="card__figure">
                <img src="{{ asset('storage/' . $owner->profile_picture) }}" alt="{{$owner->name}}">
            </figure>
            <p class="card__text card__description">{{$owner->description}}</p>
        </section>
    </a>
</li>