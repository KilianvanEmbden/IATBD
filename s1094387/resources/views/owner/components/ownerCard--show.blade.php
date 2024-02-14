<article class="card__show">
    <section class="card">
        <h2 class="card__title">{{$owner->name}}</h2>
        <section class="card__section">
            <figure class="card__figure">
                <img src="{{ asset('storage/' . $owner->profile_picture) }}" alt="{{$user->name}}">
            </figure>
            <p class="card__text">{{$owner->email}}</p>
            <p class="card__text">{{$owner->phone_number}}</p>
            <p class="card__text">{{$owner->role}}</p>
            <p class="card__text card__description">{{$owner->description}}</p>
        </section>
    </section>
</article>