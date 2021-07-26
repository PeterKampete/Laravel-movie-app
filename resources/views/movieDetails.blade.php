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

</head>

<body>

    <div class="content-container">

        <div class="image-container">
            <img src="{{'https://image.tmdb.org/t/p/w185/'.$movie['poster_path']}}" class="image-details" />
        </div>
        <div class="details-container">
            <h3 class=" movie-title">{{$movie['title']}}</h3>

            <div class="info-section">
                @foreach($movie['genres'] as $genre)
                {{$genre['name']}}@if (!$loop->last),
                @endif
                @endforeach
            </div>

            <div class="info-section">
                <label>{{\Carbon\Carbon::parse($movie['release_date']) -> format('d/m/Y')}}</label>
            </div>
            <!--date,time-->
            <div class="info-section">
                <label>Votes</label>
                <span>{{$movie['vote_average'] *10 .'%'}}</span>
            </div>

            <div class="info-section">
                <label>Overview</label>
                <span>{{$movie['overview']}}</span>
            </div>
        </div>
    </div>

</body>

</html>