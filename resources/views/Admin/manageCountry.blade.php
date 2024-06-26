<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="/css/admin/manageCountry.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
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
                <li>
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
        <div class="add-country">
            <form action="{{ route('countries.create') }}" method="GET">
                @csrf
                <div class="add-country">
                    <button type="submit">Add Country</button>
                </div>
            </form>
        </div>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Total Medal</th>
                    <th scope="col">Gold Medal</th>
                    <th scope="col">Silver Medal</th>
                    <th scope="col">Bronze Medal</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($countries as $country)
                <tr>
                    <td>{{ $country['name'] }}</td>
                    <td>
                        <img src="{{ asset('images/countries/' . $country->image) }}" alt="{{ $country->name }}" />
                    </td>
                    <td>{{ $country['description'] }}</td>
                    <td>{{ $country['total_medal'] }}</td>
                    <td>{{ $country['gold_medal'] }}</td>
                    <td>{{ $country['silver_medal'] }}</td>
                    <td>{{ $country['bronze_medal'] }}</td>
                    <td>
                        <form action="{{ route('country.edit', $country->id) }}" method="GET" style="display: inline;">
                            @csrf
                            <button type="submit" class="edit">Edit</button>
                        </form>

                        <form action="{{ route('country.delete', $country->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete" onclick="return confirm('Are you sure you want to delete this country?')">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>


    </div>

    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();

        });
    </script>
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