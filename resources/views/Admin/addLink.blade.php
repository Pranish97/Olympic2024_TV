<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="/css/addLink.css">
    <title>Add Links</title>
</head>

<body>
    <div class="container">
        <h2>Add Links</h2>

        <form action="{{ route('link.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title-box">
                <label for="title">Title:</label>
                <input id="title" type="text" name="title" required onclick="changeStyleTitle()" onkeyup="onKeyUpTitle()">
            </div>
            <div class="link-box">
                <label for="link">YouTube Link:</label>
                <input type="url" name="link" id="link" onclick="changeStyleLink()" onkeyup="onKeyUpLink()" required>
            </div>
            <div class="game-box">
                <label for="game">Game:</label>
                <select id="game" name="game">
                    <option value="football">Football</option>
                    <option value="race">Race</option>
                    <option value="swimming">Swimming</option>
                    <option value="basketball">Basketball</option>
                </select>
            </div>
            <div class="live-box">
                <label for="live">Live:</label>
                <input type="text" name="live" id="live" onclick="changeStyleLive()" onkeyup="onKeyUpLive()" required>
            </div>
            <div class="id-box">
                <label for="country_id">Country Id:</label>
                <input id="country_id" type="number" name="country_id" required onclick="changeStyleId()" onkeyup="onKeyUpId()">
            </div>
            <button type="submit" class="addLink">Add Video</button>
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

        function changeStyleLink() {
            var linkInput = document.getElementById('link');
            linkInput.classList.add('clicked-style');
        }

        function onKeyUpLink() {
            var linkInput = document.getElementById('link');
            linkInput.classList.add('clicked-style');
        }

        function changeStyleGame() {
            var gameInput = document.getElementById('game');
            gameInput.classList.add('clicked-style');
        }

        function onKeyUpGame() {
            var gameInput = document.getElementById('game');
            gameInput.classList.add('clicked-style');
        }

        function changeStyleLive() {
            var liveInput = document.getElementById('live');
            liveInput.classList.add('clicked-style');
        }

        function onKeyUpLive() {
            var liveInput = document.getElementById('live');
            liveInput.classList.add('clicked-style');
        }


        function changeStyleId() {
            var idInput = document.getElementById('id');
            idInput.classList.add('clicked-style');
        }

        function onKeyUpId() {
            var idInput = document.getElementById('id');
            idInput.classList.add('clicked-style');
        }
    </script>
</body>

</html>