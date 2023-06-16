<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="icon" href="{{ asset('img/cat.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:regular,700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:700,800&display=swap" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimo</title>
</head>
<body>
<div class="wrapper">
    <header class="header ">
        <div class="header__block __container">
            <div class="header__icon">
                <a href="{{ route('post.index') }}" class="icon">minimø</a>
            </div>
            <div class="header__menu menu">
                <nav class="menu__block">
                    <ul class="link">
                        <li><a href="{{ route('about.show') }}">About Us</a></li>
                    </ul>
                    <ul class="link">
                        <li><a href="">photodiary</a></li>
                    </ul>
                    <ul class="link">
                        <li><a href="">music</a></li>
                    </ul>
                    <ul class="link">
                        <li><a href="">travel</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">

        @yield('main')

    </main>
    <footer class="footer">
        <div class="column __container">
            <div class="column-one">
                <nav class="us">
                    <a href="#">
                        <p class="text text-color000">
                            Terms and conditions
                        </p>
                    </a>
                    <a href="#">
                        <p class="text text-color000">
                            Privacy
                        </p>
                    </a>
                </nav>
            </div>
            <div class="column-two">
                <a href="#">
                    <p class="text text-color000 textFollow">
                        Follow
                    </p>
                </a>
                <nav class="Follow">
                    <a href="#">
                        <div class="networks">
                            <img src="{{ asset('img/footer/facebook_512.png') }}" alt="facebook">
                        </div>
                    </a>
                    <a href="#">
                        <div class="networks">
                            <img src="{{ asset('img/footer/twitter_511.png') }}" alt="twitter">
                        </div>
                    </a>
                    <a href="#">
                        <div class="networks">
                            <img src="{{ asset('img/footer/instagram_902.png') }}" alt="instagram">
                        </div>
                    </a>
                </nav>
            </div>
        </div>
    </footer>
</div>

</body>

</html>
