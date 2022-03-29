@extends('layouts.base')

@section('pageTitle', $comic['title'])

@section('contenuto')
    <div class="comicInfo">
        <div class="top">
            <div class="container">
                <div class="cover">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <span class="label type">{{$comic['type']}}</span>
                    <span class="label gallery">VIEW GALLERY</span>
                </div>
            </div>
        </div>
        <div class="info">
            <div class="container">
                <div class="comic">
                    <h1>{{$comic['title']}}</h1>

                    <div class="price">
                        <div class="left">
                            <div>U.S. Price: <span class="highlight">{{$comic['price']}}</span></div>
                            <div>AVAILABLE</div>
                        </div>
                        <div class="right">
                            <span class="highlight">Check Availability <i class="fa-solid fa-caret-down"></i></span>
                        </div>
                    </div>
                    <p>
                        {{$comic['description']}}
                    </p>
                </div>

                <div class="ad">
                    <div class="adBox">
                        <h3>ADVERTISEMENT</h3>
                        <img src="{{asset('/img/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="half">
                    <h2>Talent</h2>
                    <div class="list">
                        <div class="title">Art by: </div>
                        <div class="desc">
                            @foreach ($comic['artists'] as $artist)
                                <a href="#">{{$artist}}</a>,
                            @endforeach
                        </div>
                    </div>
                    <div class="list">
                        <div class="title">Written by: </div>
                        <div class="desc">
                            @foreach ($comic['writers'] as $writer)
                                <a href="#">{{$writer}}</a>,
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="half">
                    <h2>Specs</h2>
                    <div class="list">
                        <div class="title">Series: </div>
                        <div class="desc">
                            <a href="#">{{$comic['series']}}</a>
                        </div>
                    </div>
                    <div class="list">
                        <div class="title">U.S. Price: </div>
                        <div class="desc">{{$comic['price']}}</div>
                    </div>
                    <div class="list">
                        <div class="title">On Sale Date: </div>
                        <div class="desc">{{$comic['sale_date']}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection