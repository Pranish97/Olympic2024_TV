<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="/css/data.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Data Manegement</title>
</head>

<body>
    <nav class="navbar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="/images/olympic.jpg" alt="logo" />
                </span>
                <div class=" text header-text">
                    <span class="name">FunOlympic TV</span>
                </div>
            </div>

        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="search" placeholder="Search..." />
                </li>

                <p class="menu-text">Menu</p>
                <ul class="menu-links">
                    <li class="nav-link">

                        <a href="/dashboard">
                            <i class='bx bx-home icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/football">
                            <i class='bx bx-football icon'></i>
                            <span class="text nav-text">Football</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/race">
                            <i class='bx bx-run icon'></i>
                            <span class="text nav-text">Race</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/swimming">
                            <i class='bx bx-swim icon'></i>
                            <span class="text nav-text">Swimming</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/basketball">
                            <i class='bx bx-basketball icon'></i>
                            <span class="text nav-text">Basketball</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/live">
                            <i class='bx bx-movie-play icon'></i>
                            <span class="text nav-text">Live</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li>
                    <a href="/profile">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="/logout">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="nav">
            <ul class="data-links">
                <li class="">
                    <form action="{{ route('manage.link') }}" method="GET">
                        @csrf
                        <a href="{{ route('manage.link') }}">Manage Link</a>
                    </form>
                </li>
                <li>
                    <form action="{{ route('manage.countries') }}" method="GET">
                        @csrf
                        <a href="{{ route('manage.countries') }}">Manage Country</a>
                    </form>

                </li>
                <li>
                    <form action="{{ route('manage.schedule') }}" method="GET">
                        @csrf
                        <a href="{{ route('manage.schedule') }}">Manage Schedule</a>
                    </form>
                </li>
                <li>
                    <form action="{{ route('manage.news') }}" method="GET">
                        @csrf
                        <a href="{{ route('manage.news') }}">Manage News</a>
                    </form>
                </li>
                <li>
                    <form action="{{ route('manage.player') }}" method="GET">
                        @csrf
                        <a href="{{ route('manage.player') }}">Manage Players</a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>