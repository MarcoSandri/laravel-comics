@extends('layouts.base')

@section('pageTitle', 'Comics')

@section('contenuto')

    <section class="content">
        <div class="container">
        <span class="label title">CURRENT SERIES</span>
            <div class="comics">
                
                @foreach ($comics as $key => $comic)
                    <div class="comicCard">
                        <a href="{{route('comic', ['comic_id' => $key])}}">
                            <div class="comicImage">
                                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            </div>
                            <div class="text">
                                {{$comic['title']}}
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
            <button class="label blue-button">LOAD MORE</button>
        </div>
    </section>
    
@endsection