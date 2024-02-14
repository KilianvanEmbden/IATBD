<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Register</title>
</head>
<body>
    <header class="header">
        <h1>Extra information</h1>
        <h2>{{$user->name}}</h2>
    </header>
    <main class="form_section">
            <form action="/register/edit" method="post" enctype="multipart/form-data" class="form">
            @if ($errors->any())
                <section class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </section>
            @endif
                @csrf
                @method('patch')
                <input type="hidden" name="role" id="role" value="owner">
                <section class="form__input">
                    <label for="profile_picture">Profile picture: </label>
                    <input type="file" name="profile_picture" id="profile_picture"/>
                </section>
                <section class="form__input">
                    <label for="phone_number">Phone number: </label>
                    <input type="text" name="phone_number" id="phone_number" placeholder="0612345678" />
                </section>
                <section class="form__input">
                    <label for="description" class="u-label-vert-align-top">About yourself: </label>
                    <textarea name="description" id="description" placeholder="Type here..."></textarea>
                </section>
                <section class="form__button">
                    <button type="submit" class="u-button">Register</button>
                </section>
            </form>
    </main>
</body>
</html>