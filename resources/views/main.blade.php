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
    <p class="intro">Based from <b><a href="https://dribbble.com/shots/2241918-Movie-Ticket-Card-Sketch-freebie" target="_blank">Soumya's Movie Ticket Card</a></b>
    <p>

    <div class="container">
        <div class="movie-card">
            <div class="movie-header manOfSteel">
                <div class="header-icon-container">
                    <a href="#">
                        <i class="material-icons header-icon"></i>
                    </a>
                </div>
            </div>
            <!--movie-header-->
            <div class="movie-content">
                <div class="movie-content-header">
                    <a href="#">
                        <h3 class="movie-title">Man of Steel</h3>
                    </a>
                    <div class="imax-logo"></div>
                </div>
                <div class="movie-info">
                    <div class="info-section">
                        <label>Date & Time</label>
                        <span>Sun 8 Sept - 10:00PM</span>
                    </div>
                    <!--date,time-->
                    <div class="info-section">
                        <label>Screen</label>
                        <span>03</span>
                    </div>
                    <!--screen-->
                    <div class="info-section">
                        <label>Row</label>
                        <span>F</span>
                    </div>
                    <!--row-->
                    <div class="info-section">
                        <label>Seat</label>
                        <span>21,22</span>
                    </div>
                    <!--seat-->
                </div>
            </div>
            <!--movie-content-->
        </div>
        <!--movie-card-->

        <div class="movie-card">
            <div class="movie-header babyDriver">
                <div class="header-icon-container">
                    <a href="#">
                        <i class="material-icons header-icon"></i>
                    </a>
                </div>
            </div>
            <!--movie-header-->
            <div class="movie-content">
                <div class="movie-content-header">
                    <a href="#">
                        <h3 class="movie-title">Baby Driver</h3>
                    </a>
                    <div class="imax-logo"></div>
                </div>
                <div class="movie-info">
                    <div class="info-section">
                        <label>Date & Time</label>
                        <span>Tue 4 July - 05:00PM</span>
                    </div>
                    <!--date,time-->
                    <div class="info-section">
                        <label>Screen</label>
                        <span>01</span>
                    </div>
                    <!--screen-->
                    <div class="info-section">
                        <label>Row</label>
                        <span>H</span>
                    </div>
                    <!--row-->
                    <div class="info-section">
                        <label>Seat</label>
                        <span>15</span>
                    </div>
                    <!--seat-->
                </div>
            </div>
            <!--movie-content-->
        </div>
        <!--movie-card-->

        <div class="movie-card">
            <div class="movie-header theDarkTower">
                <div class="header-icon-container">
                    <a href="#">
                        <i class="material-icons header-icon"></i>
                    </a>
                </div>
            </div>
            <!--movie-header-->
            <div class="movie-content">
                <div class="movie-content-header">
                    <a href="#">
                        <h3 class="movie-title">The Dark Tower</h3>
                    </a>
                    <div class="imax-logo"></div>
                </div>
                <div class="movie-info">
                    <div class="info-section">
                        <label>Date & Time</label>
                        <span>Wed 16 Aug - 07:00PM</span>
                    </div>
                    <!--date,time-->
                    <div class="info-section">
                        <label>Screen</label>
                        <span>06</span>
                    </div>
                    <!--screen-->
                    <div class="info-section">
                        <label>Row</label>
                        <span>C</span>
                    </div>
                    <!--row-->
                    <div class="info-section">
                        <label>Seat</label>
                        <span>18</span>
                    </div>
                    <!--seat-->
                </div>
            </div>
            <!--movie-content-->
        </div>
        <!--movie-card-->

        <div class="movie-card">
            <div class="movie-header bladeRunner2049">
                <div class="header-icon-container">
                    <a href="#">
                        <i class="material-icons header-icon"></i>
                    </a>
                </div>
            </div>
            <!--movie-header-->
            <div class="movie-content">
                <div class="movie-content-header">
                    <a href="#">
                        <h3 class="movie-title">Blade Runner 2049</h3>
                    </a>
                    <div class="imax-logo"></div>
                </div>
                <div class="movie-info">
                    <div class="info-section">
                        <label>Date & Time</label>
                        <span>Mon 16 Oct - 10:00PM</span>
                    </div>
                    <!--date,time-->
                    <div class="info-section">
                        <label>Screen</label>
                        <span>06</span>
                    </div>
                    <!--screen-->
                    <div class="info-section">
                        <label>Row</label>
                        <span>D</span>
                    </div>
                    <!--row-->
                    <div class="info-section">
                        <label>Seat</label>
                        <span>05,06</span>
                    </div>
                    <!--seat-->
                </div>
            </div>
            <!--movie-content-->
        </div>
        <!--movie-card-->

    </div>
    <!--container-->

    </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        </div>
    </body>

</html>
