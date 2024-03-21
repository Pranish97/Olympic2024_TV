<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="/css/addlink.css">
    <title>Edit Link</title>
</head>

<body>
    <div class="container">
        <h2>Edit Link</h2>
        <form action="{{ route('link.update', $link->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="title-box">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $link->title }}" required
                    onclick="changeStyleTitle()" onkeyup="onKeyUpTitle()">
            </div>
            <div class="link-box">
                <label for="link">Link:</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $link->link }}" required
                    onclick="changeStyleLink()" onkeyup="onKeyUpLink()">
            </div>
            <div class="game-box">
                <label for="game">Game:</label>
                <select id="game" name="game">
                    <option value="football" {{ $link->game === 'football' ? 'selected' : '' }}>Football</option>
                    <option value="athletics" {{ $link->game === 'athletics' ? 'selected' : '' }}>Athletics</option>
                    <option value="swimming" {{ $link->game === 'swimming' ? 'selected' : '' }}>Swimming</option>
                    <option value="basketball" {{ $link->game === 'basketball' ? 'selected' : '' }}>Basketball</option>
                </select>
            </div>

            <div class="id-box">
                <label for="country_id">Country ID:</label>
                <input type="text" class="form-control" id="country_id" name="country_id"
                    value="{{ $link->country_id }}" required onclick="changeStyleCountryId()"
                    onkeyup="onKeyUpCountryId()">
            </div>
            <button type="submit" class="addLink">Update</button>
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

    function changeStyleVideoId() {
        var videoIdInput = document.getElementById('video_id');
        videoIdInput.classList.add('clicked-style');
    }

    function onKeyUpVideoId() {
        var videoIdInput = document.getElementById('video_id');
        videoIdInput.classList.add('clicked-style');
    }

    function changeStyleGame() {
        var gameInput = document.getElementById('game');
        gameInput.classList.add('clicked-style');
    }

    function onKeyUpGame() {
        var gameInput = document.getElementById('game');
        gameInput.classList.add('clicked-style');
    }

    function changeStyleCountryId() {
        var countryIdInput = document.getElementById('country_id');
        countryIdInput.classList.add('clicked-style');
    }

    function onKeyUpCountryId() {
        var countryIdInput = document.getElementById('country_id');
        countryIdInput.classList.add('clicked-style');
    }
    </script>
</body>

</html>