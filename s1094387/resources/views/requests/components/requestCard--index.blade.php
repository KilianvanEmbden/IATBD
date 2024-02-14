<li class="card">
    <a href="/owners/{{$request->user_id}}">
        <section class="card__section">
            <h2>Name: {{$request->name}}</h2>
            <p>Email: {{$request->email}}</p>
            <p>Telefoonnummer: {{$request->phone_number}}</p>
            <p>{{$request->comment}}</p>
        </section>
    </a>
    @if($request->accepted == false)
                        <section class="requests__list__item__buttons u-margin-top">

                            <form action="/requests" method="post">
                                @csrf
                                @method('patch')
                                <input type="hidden" name="id" value="{{$request->id}}">
                                <input type="hidden" name="book_id" value="{{$request->book_id}}">
                                <button type="submit" class="u-button">Accept</button>
                            </form>
                            <form action="/requests" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{$request->id}}">
                                <button type="submit" class="u-button">Delete</button>
                            </form>
                        </section>
                    @else
                        <section class="requests__list__item__buttons">
                            <section>
                                <p>Accepted!</p>
                                <a href="/reviews/{{$request->id}}/create" class="u-button">Review</a>
                            </section>
                            <form action="/requests" method="post" class="u-bottom-0">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{$request->id}}">
                                <button type="submit" class="u-button">Delete</button>
                            </form>
                        </section>
                    @endif
</li>