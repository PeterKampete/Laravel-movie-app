<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>MOVIES</title>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

</head>

<body>
    <p class="intro">Based from <b><a href="https://dribbble.com/shots/2241918-Movie-Ticket-Card-Sketch-freebie"
                target="_blank">Soumya's Movie Ticket Card</a></b>
    <p>

    <div class="container">
        <div>
            @foreach($topRatedMovies as $movie)

            <div class="movie-card">
                <div class="movie-header image">
                    <img src="{{'https://image.tmdb.org/t/p/w185/'.$movie['poster_path']}}" />
                    <a href="#">
                        <i class="material-icons header-icon"></i>
                    </a>
                </div>
                <!--movie-header-->
                <div class="movie-content">
                    <div class="movie-content-header">
                        <a href="#">
                            <h3 class="movie-title">{{$movie['title']}}</h3>
                        </a>
                        <div class="imax-logo"></div>
                    </div>
                    <div class="movie-info">
                        <div class="info-section">
                            <label>{{\Carbon\Carbon::parse($movie['release_date']) -> format('d/m/Y')}}</label>
                        </div>
                        <!--date,time-->
                        <div class="info-section">
                            <label>Votes</label>
                            <span>{{$movie['vote_average'] *10 .'%'}}</span>
                        </div>
                        <!--screen-->
                        <div class="info-section">
                            <label>{{$movie['original_language']}}</label>
                            <span>F</span>
                        </div>
                        <!--row-->
                        <div class="info-section">
                            <label>Genre</label>
                            <span>{{$movie['overview']}}</span>
                        </div>
                        <div class="info-section">
                            @foreach($movie['genre_ids'] as $genre)
                            {{$genres->get($genre)}}@if (!$loop->last),
                            @endif
                            @endforeach
                        </div>
                        <!--seat-->
                    </div>
                </div>
                <!--movie-content-->
            </div>
            @endforeach
        </div>


        <h1>
            NOW PLAYING
        </h1>


    </div>

</body>

</html>