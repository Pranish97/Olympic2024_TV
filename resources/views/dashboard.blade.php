<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Welcome to Olympic TV</title>
</head>

<body>
    <nav class="navbar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="images/olympic.jpg" alt="logo" />
                </span>
                <div class=" text header-text">
                    <span class="name">Olympic TV</span>
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
                        <a href="/athletic">
                            <i class='bx bx-run icon'></i>
                            <span class="text nav-text">Athletics</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="/dashboar">
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
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="/logout">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="country">
            @foreach ($countries as $country)
            <div class="country-box">
                <form action="{{ route('redirect.to.country', ['countryId' => $country->id]) }}" method="get">
                    <button type="submit">
                        <img src="{{ asset('images/countries/' . $country->image) }}" alt="{{ $country->name }}" />
                        <p>{{ $country->name }}</p>
                    </button>
                </form>
            </div>
            @endforeach
        </div>

        <div class="add">
            @if(auth()->check() && auth()->user()->role == 'Admin')
            <form action="{{ route('countries.create') }}" method="GET">
                @csrf
                <div class="add-country">
                    <button type="submit">Add Country</button>
                </div>
            </form>
            @endif
        </div>

        <div class="add-link">
            @if(auth()->check() && auth()->user()->role == 'Admin')
            <form action="{{ route('link.create') }}" method="GET">
                @csrf
                <div class="add-links">
                    <button type="submit">Add Link</button>
                </div>
            </form>
            @endif
        </div>

        <div class="videos">
            @foreach ($links as $link)
            <div class="video-box">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/{{$link->video_id}}?AIzaSyDcKnS-6ylja0hFrNvQcp2qlWmQFr1t9Qo"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                <p>{{ $link->title }}</p>
            </div>
            @endforeach
        </div>
    </div>


</body>
@if(session('success'))
<script>
toastr.options = {
    "progressBar": true,
    "closeButton": true,
}
toastr.success("{{ session('success') }}")
</script>
@endif

</html>