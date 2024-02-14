<article class="card__show">
    <section class="card">
        <h2 class="card__title">{{$user->name}}</h2>
        <section class="card__section">
            <figure class="card__figure">
                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="{{$user->name}}">
            </figure>
            <p class="card__text">{{$user->email}}</p>
            <p class="card__text">{{$user->phone_number}}</p>
            <p class="card__text">{{$user->role}}</p>
            <p class="card__text card__description">{{$user->description}}</p>
            <a href="/profile/edit" class="u-button">Edit profile</a>
        </section>
    </section>
</article>