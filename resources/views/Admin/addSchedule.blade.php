<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="/css/addSchedule.css">
    <title>Add Schedule</title>
</head>

<body>
    <div class="container">
        <h2>Add Schedule</h2>

        <form action="{{ route('schedule.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="name-box">
                <label for="title">Schedule Title:</label>
                <input id="title" type="text" name="title" required onclick="changeStyleTitle()" onkeyup="onKeyUpTitle()">
            </div>
            <div class="teamA-box">
                <label for="teamA">Team A:</label>
                <input id="teamA" type="text" name="teamA" required onclick="changeStyleTeamA()" onkeyup="onKeyUpTeamA()">
            </div>
            <div class="teamB-box">
                <label for="teamB">Team B:</label>
                <input id="teamB" type="text" name="teamB" required onclick="changeStyleTeamB()" onkeyup="onKeyUpTeamB()">
            </div>
            <div class="teamA-image-box">
                <label for="teamA_image">Team A Image:</label>
                <input type="file" name="teamA_image" accept="image/*" required>
            </div>
            <div class="teamB-image-box">
                <label for="teamB_image">Team B Image:</label>
                <input type="file" name="teamB_image" accept="image/*" required>
            </div>
            <div class="stadium-box">
                <label for="stadium">Stadium:</label>
                <input id="stadium" type="text" name="stadium" required onclick="changeStyleStadium()" onkeyup="onKeyUpStadium()">
            </div>
            <div class="league-box">
                <label for="league">League:</label>
                <input id="league" type="text" name="league" required onclick="changeStyleLeague()" onkeyup="onKeyUpLeague()">
            </div>
            <div class="time-box">
                <label for="time">Time:</label>
                <input id="time" type="text" name="time" required onclick="changeStyleTime()" onkeyup="onKeyUpTime()">
            </div>
            <div class="date-box">
                <label for="date">Date:</label>
                <input id="date" type="date" name="date" required onclick="changeStyleDate()" onkeyup="onKeyUpDate()">
            </div>
            <button type="submit" class="addSchedule">Add Schedule</button>
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

        function changeStyleDate() {
            var dateInput = document.getElementById('date');
            dateInput.classList.add('clicked-style');
        }

        function onKeyUpDate() {
            var dateInput = document.getElementById('date');
            dateInput.classList.add('clicked-style');
        }
    </script>
</body>

</html>