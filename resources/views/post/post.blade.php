@extends('layouts.main')
@section('main')


    <div class="block__cards">
        <div class="cards __container2">
            <div class="cards__block">
                <div class="cards__block-row">
                    <div class="block__image">
                        <img src="{{ asset('img/cards/' . $post->image) }}" alt="#">
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
        </div>
    </div>

@endsection
