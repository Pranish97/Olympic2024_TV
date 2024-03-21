<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="/css/admin/manageSchedule.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Management</title>
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
                    <a href="{{ route('manage.link') }}">Manage Link</a>
                </li>
                <li>
                    <a href="{{ route('manage.countries') }}">Manage Country</a>
                </li>
                <li>
                    <a href="{{ route('manage.schedule') }}">Manage Schedule</a>
                </li>
                <li>
                    <form action="{{ route('manage.news') }}" method="GET">
                        @csrf
                        <a href="{{ route('manage.news') }}">Manage News</a>
                    </form>
                </li>
            </ul>
        </div>
        <div class="add-schedule">
            <form action="{{ route('schedule.create') }}" method="GET">
                <div class="add-schedule">
                    <button type="submit">Add Schedule</button>
                </div>
            </form>
        </div>

        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">teamA</th>
                    <th scope="col">teamA_image</th>
                    <th scope="col">teamB</th>
                    <th scope="col">teamB_image</th>
                    <th scope="col">Stadium</th>
                    <th scope="col">League</th>
                    <th scope="col">Time</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->title }}</td>
                    <td>{{ $schedule->teamA }}</td>
                    <td>
                        <img src="{{ asset('images/teams/' . $schedule->teamA_image) }}" alt="{{ $schedule->teamA }}" />
                    </td>
                    <td>{{ $schedule->teamB }}</td>
                    <td>
                        <img src="{{ asset('images/teams/' . $schedule->teamB_image) }}" alt="{{ $schedule->teamB }}" />
                    </td>
                    <td>{{ $schedule->stadium }}</td>
                    <td>{{ $schedule->league }}</td>
                    <td>{{ $schedule->time }}</td>
                    <td>{{ $schedule->date }}</td>
                    <td>
                        <form action="{{ route('schedule.edit', $schedule->id) }}" method="GET"
                            style="display: inline;">
                            @csrf
                            <button type="submit" class="edit">Edit</button>
                        </form>

                        <form action="{{ route('schedule.delete', $schedule->id) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete"
                                onclick="return confirm('Are you sure you want to delete this schedule?')">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
</body>

</html>