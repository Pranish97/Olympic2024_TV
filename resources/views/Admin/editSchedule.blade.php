<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="/css/addSchedule.css">
    <title>Edit Schedule</title>
</head>

<body>
    <div class="container">
        <h2>Edit Schedule</h2>
        <form action="{{ route('schedule.update', $schedule->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="title-box">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $schedule->title }}" required
                    onclick="changeStyleTitle()" onkeyup="onKeyUpTitle()">
            </div>
            <div class="teamA-box">
                <label for="teamA">Team A:</label>
                <input type="text" class="form-control" id="teamA" name="teamA" value="{{ $schedule->teamA }}" required
                    onclick="changeStyleTeamA()" onkeyup="onKeyUpTeamA()">
            </div>
            <div class="teamB-box">
                <label for="teamB">Team B:</label>
                <input type="text" class="form-control" id="teamB" name="teamB" value="{{ $schedule->teamB }}" required
                    onclick="changeStyleTeamB()" onkeyup="onKeyUpTeamB()">
            </div>
            <div class="teamA-image-box">
                <label for="teamA_image">Team A Image:</label>
                <input type="file" class="form-control-file" id="teamA_image" name="teamA_image" accept="image/*">
                <img src="{{ asset('images/teams/' . $schedule->teamA_image) }}" alt="Team A Image"
                    style="max-width: 200px; margin-top: 10px;">
            </div>
            <div class="teamB-image-box">
                <label for="teamB_image">Team B Image:</label>
                <input type="file" class="form-control-file" id="teamB_image" name="teamB_image" accept="image/*">
                <img src="{{ asset('images/teams/' . $schedule->teamB_image) }}" alt="Team B Image"
                    style="max-width: 200px; margin-top: 10px;">
            </div>
            <div class="stadium-box">
                <label for="stadium">Stadium:</label>
                <input type="text" class="form-control" id="stadium" name="stadium" value="{{ $schedule->stadium }}"
                    required onclick="changeStyleStadium()" onkeyup="onKeyUpStadium()">
            </div>
            <div class="league-box">
                <label for="league">League:</label>
                <input type="text" class="form-control" id="league" name="league" value="{{ $schedule->league }}"
                    required onclick="changeStyleLeague()" onkeyup="onKeyUpLeague()">
            </div>
            <div class="time-box">
                <label for="time">Time:</label>
                <input type="text" class="form-control" id="time" name="time" value="{{ $schedule->time }}" required
                    onclick="changeStyleTime()" onkeyup="onKeyUpTime()">
            </div>
            <div class="date-box">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $schedule->date }}" required>
            </div>
            <button type="submit" class="addSchedule">Update</button>
        </form>
    </div>
    <script>
    function changeStyleTitle() {
        var titleInput = document.getElementById('title');
        titleInput.classList.add('clicked-style');
    }

    function onKeyUpTitle() {
        var titleInput = document.getElementById('title');
        titleInput.classList.add('clicked-style');
    }

    function changeStyleTeamA() {
        var teamAInput = document.getElementById('teamA');
        teamAInput.classList.add('clicked-style');
    }

    function onKeyUpTeamA() {
        var teamAInput = document.getElementById('teamA');
        teamAInput.classList.add('clicked-style');
    }

    function changeStyleTeamB() {
        var teamBInput = document.getElementById('teamB');
        teamBInput.classList.add('clicked-style');
    }

    function onKeyUpTeamB() {
        var teamBInput = document.getElementById('teamB');
        teamBInput.classList.add('clicked-style');
    }

    function changeStyleStadium() {
        var stadiumInput = document.getElementById('stadium');
        stadiumInput.classList.add('clicked-style');
    }

    function onKeyUpStadium() {
        var stadiumInput = document.getElementById('stadium');
        stadiumInput.classList.add('clicked-style');
    }

    function changeStyleLeague() {
        var leagueInput = document.getElementById('league');
        leagueInput.classList.add('clicked-style');
    }

    function onKeyUpLeague() {
        var leagueInput = document.getElementById('league');
        leagueInput.classList.add('clicked-style');
    }

    function changeStyleTime() {
        var timeInput = document.getElementById('time');
        timeInput.classList.add('clicked-style');
    }

    function onKeyUpTime() {
        var timeInput = document.getElementById('time');
        timeInput.classList.add('clicked-style');
    }
    </script>
</body>

</html>