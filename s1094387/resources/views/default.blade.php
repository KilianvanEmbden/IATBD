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
    <script src="/js/main.js" defer></script>
    <title>@yield('title')</title>
</head>
<body>
    <header class="nav__title">
        <a href="/"><h1>Time2share</h1></a>
        <nav class="nav_main">  
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/books">Books</a></li>
                <li><a href="/owners">Owners</a></li>
                <li class="dropdown">
                <a href="/profile" class="dropbtn">User</a>
                    <div class="dropdown-content">
                        <a href="/requests">Messages</a>
                        <a href="/profile">Profile</a>
                        <a class="nav__adminPanel" href="/admin" data-check-if-admin="{{$user->role}}" id="js--adminPanel">Admin Panel</a>
                        <a href="/logout">Log out</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>