@extends('default')

@section('title')
    Messages
@endsection

@section('content')
    <section class="requests">
        <h2 class="title">Messages</h2>
        <ul class="requests__list">
            @if(count($requests) == 0)
            <article class="card card_empty">
                <h2 class="title">No messages</h2>
            </article>
            @endif
            @foreach($requests as $request)
                @include('requests.components.requestCard--index')
            @endforeach
        </ul>
    </section>
@endsection