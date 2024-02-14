@extends('default')

@section('title')
    Edit profile
@endsection

@section('content')
    <section class="editProfile">
        <h2>Edit profile</h2>
        @if ($errors->any())
            <section class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            </section>
        @endif
        <form class="form" action="/profile/edit" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <section class="form__input">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" value="{{$user->name}}" />
            </section>
            <section class="form__input">
                <label for="profile_picture">Profile picture: </label>
                <input type="file" name="profile_picture" id="profile_picture"/>
            </section>
            <section class="form__input">
                <label for="phone_number">Phone number: </label>
                <input type="text" name="phone_number" id="phone_number" placeholder="0612345678" value="{{$user->phone_number}}" />
            </section>
            <section class="form__input">
                <label for="description" class="u-label-vert-align-top">Describe yourself: </label>
                <textarea name="description" id="description" placeholder="I like books that...">{{$user->description}}</textarea>
            </section>
            <section class="form__input">
                <button class="u-button" type="submit">Update</button>
                <button class="u-button" type="button" onclick="goBack()">Back</button>
            </section>
        </form>
    </section>
@endsection