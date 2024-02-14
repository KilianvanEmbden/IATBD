@extends('default')

@section('title')
    Admin Panel
@endsection

@section('content')
    <section class="admin">
        <h1 class="title">Admin Panel</h1>
        @if ($errors->any())
            <section class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </section>
        @endif
        <section class="admin__main">
            <section class="section__card__index">
                <h3 class="title">Users</h3>
                <ul >
                    @foreach($persons as $person)
                        @if($person->role != 'Admin')
                            @include('admin.components.userCard--index')
                        @endif
                    @endforeach
                </ul>
            </section>
            <section class="section__card__index">
                <h3 class="title">Blocked</h3>
                <ul >
                    @foreach($blocked as $person)
                        @include('admin.components.userCard--index')
                    @endforeach
                </ul>
            </section>
            <section class="section__card__index">
                <h3 class="title">Books</h3>
                <ul >
                    @foreach($books as $book)
                        @include('admin.components.bookCard--index')
                    @endforeach
                </ul>
            </section>
        </section>
    </section>
@endsection