<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recap Finale</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <header class="py-3 border-bottom lh-1">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 ">
                    <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#">
                        <img height="48px" src="./assets/aulab-logo.svg">
                    </a>
                    <a class="mx-2 btn btn-sm btn-outline-secondary" href="{{ route('articles.index') }}">Articoli</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    @guest
                        <a class="mx-2 btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Registrati</a>
                        <a class="mx-2 btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Entra</a>
                    @else
                        <span>Benvenuto, {{ auth()->user()->fullName() }}</span>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="mx-2 btn btn-sm btn-outline-secondary">Logout</button>
                        </form>
                    @endguest
                </div>
            </div>
        </header>


    </div>
    {{ $slot }}
</body>

</html>
