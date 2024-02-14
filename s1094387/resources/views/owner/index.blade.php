@extends('default')

@section('title')
    Owners
@endsection

@section('content')
<section class="section__card__index">
    <section class="section__main__index">
        <h2 class="title">Owners</h2>
        <ul class="card__index">
            @foreach($owners as $owner)
                @include('owner.components.ownerCard--index')
            @endforeach
        </ul>
    </section>
</section>
@endsection