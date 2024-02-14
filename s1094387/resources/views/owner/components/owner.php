<article class="ownerShow">
    <section class="ownerShow__card">
        <section class="ownerShow__card__title">
            <h2>{{$owner->name}}</h2>
        </section>
        <section class="ownerShow__card__section">
            <figure class="ownerShow__card__section__figure">
                <img src="{{$owner->profile_picture}}" alt="{{$owner->name}}">
            </figure>
            <p class="ownerShow__card__section__text">{{$owner->email}}</p>
            <p class="ownerShow__card__section__text">{{$owner->phone_number}}</p>
            <p class="ownerShow__card__section__text">{{$owner->description}}</p>
        </section>
        <a href="/requests/{{$owner->id}}/create" class="u-button">Send {{$owner->name}} a message</a>
    </section>
    <section class="ownerShow__section">
        <section class="ownerShow__section__reviews">
            <h3>Reviews</h3>
            <ul class="ownerShow__section__reviews__list">
                @foreach($reviews as $review)
                    <li class="ownerShow__section__reviews__list__item">
                        <h3>{{$review->title}}</h3>
                        <p>Naam: {{$review->name}}</p>
                        <p>Beoordeling: {{$review->rating}}/5</p>
                        <p>{{$review->description}}</p>
                    </li>
                @endforeach
            </ul>
        </section>
        <section class="ownerShow__section__images">
            <h3>Foto's</h3>
            <ul class="ownerShow__section__images__list">
                @foreach($images as $image)
                    <li class="ownerShow__section__images__list__item">
                        <figure>
                            <img src="{{$image->image}}" alt="Foto">
                        </figure>
                    </li>
                @endforeach
            </ul>
        </section>
    </section>
</article>
