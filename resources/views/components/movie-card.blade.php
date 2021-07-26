    <div class="movie-card">
        <div class="movie-header image">
            <img src="{{'https://image.tmdb.org/t/p/w185/'.$movie['poster_path']}}" />
            <a href="{{route('movies.movieDetails', $movie['id'])}}">
                <i class="material-icons header-icon"></i>
            </a>
        </div>
        <!--movie-header-->
        <div class="movie-content">
            <div class="movie-content-header">
                <a href="{{route('movies.movieDetails', $movie['id'])}}">
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
                    <label>Overview</label>
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