@extends('layouts.main')
@section('main')

    <div class="main__block_one __container">
        <img src="{{ asset('img/block_1/main.png') }}" alt="">

    </div>

    <div class="main__block-text ">
        <div class="text-one __container2">
            <div class="text-one__body">
                <h2 class="title">
                    The perfect weekend getaway
                </h2>
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                    ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                    architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                    voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                    consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                    dolore magnam aliquam quaerat voluptatem.
                </p>
            </div>
            <div class="link_dip ">
                <a href="/" class="photodiary">photodiary</a>
            </div>
        </div>
    </div>

    <div class="block__cards">
        <div class="cards __container2">

            @foreach($posts as $post)

                <div class="cards__block">
                    <div class="cards__block-row">
                        <div class="block__image">
                            <img src="img/cards/{{$post->image}}" alt="#">
                        </div>
                        <div class="block__link_dip link_dip">
                            <a href="{{ route('posts.show', $post->id) }}" class="photodiary">Lifestyle</a>
                        </div>
                        <h2 class="title">
                            {{$post->title}}
                        </h2>
                        <p class="text text-long">
                            {{$post->text}}
                        </p>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

    <div class="block__subscription">
        <div class="subscription __container2">
            <div class="subscription__title">
                <h2 class="title title-anotherColor">
                    Sign up for our newsletter!
                </h2>
            </div>
            <div class="subscription__email">
                <input type="text" placeholder="Enter a valid email address">
                <div class="email__images">
                    <a href="#" class="img-link">
                        <img src="img/email/email.png" alt="Отправить">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="block__cards">
        <div class="cards __container2">

            @foreach($postsBeforeSign as $post)

                <div class="cards__block">
                    <div class="cards__block-row">
                        <div class="block__image">
                            <img src="img/cards/{{$post->image}}" alt="#">
                        </div>
                        <div class="block__link_dip link_dip">
                            <a href="{{ route('posts.show', $post->id) }}" class="photodiary">Lifestyle</a>
                        </div>
                        <h2 class="title">
                            {{$post->title}}
                        </h2>
                        <p class="text text-long">
                            {{$post->text}}
                        </p>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

    @include('link_more')
@endsection
