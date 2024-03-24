<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="/css/addPlayer.css">
    <title>Edit Player</title>
</head>

<body>
    <div class="container">
        <h2>Edit Player</h2>
        <form action="{{ route('player.update', $player->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="name-box">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $player->name }}" required
                    onclick="changeStyleName()" onkeyup="onKeyUpName()">
            </div>
            <div class="image-box">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                <img src="{{ asset('images/players/' . $player->image) }}" alt="{{ $player->name }}"
                    style="max-width: 200px; margin-top: 10px;">
            </div>
            <div class="country-box">
                <label for="country">Country:</label>
                <select name="country" class="country" id="country">
                    <option value="">Select a country</option>
                    <option value="USA" {{ $player->country === 'USA' ? 'selected' : '' }}>United States</option>
                    <option value="UK" {{ $player->country === 'UK' ? 'selected' : '' }}>United Kingdom</option>
                    <option value="Canada" {{ $player->country === 'Canada' ? 'selected' : '' }}>Canada</option>
                    <option value="Nepal" {{ $player->country === 'Nepal' ? 'selected' : '' }}>Nepal</option>
                    <option value="China" {{ $player->country === 'China' ? 'selected' : '' }}>China</option>
                    <option value="India" {{ $player->country === 'India' ? 'selected' : '' }}>India</option>
                    <option value="Japan" {{ $player->country === 'Japan' ? 'selected' : '' }}>Japan</option>
                    <option value="France" {{ $player->country === 'France' ? 'selected' : '' }}>France</option>
                    <option value="Italy" {{ $player->country === 'Italy' ? 'selected' : '' }}>Italy</option>
                    <option value="Russia" {{ $player->country === 'Russia' ? 'selected' : '' }}>Russia</option>
                </select>

            </div>
            <div class="game-box">
                <label for="game">Game:</label>
                <select id="game" name="game">
                    <option value="football" {{ $player->game === 'football' ? 'selected' : '' }}>Football</option>
                    <option value="athletics" {{ $player->game === 'athletics' ? 'selected' : '' }}>Athletics</option>
                    <option value="swimming" {{ $player->game === 'swimming' ? 'selected' : '' }}>Swimming</option>
                    <option value="basketball" {{ $player->game === 'basketball' ? 'selected' : '' }}>Basketball
                    </option>
                </select>

            </div>
            <button type="submit" class="addPlayer">Update</button>
        </form>
    </div>

    <script>
    function changeStyleName() {
        var nameInput = document.getElementById('name');
        nameInput.classList.add('clicked-style');
    }

    function onKeyUpName() {
        var nameInput = document.getElementById('name');
        nameInput.classList.add('clicked-style');
    }
    </script>
</body>

</html>