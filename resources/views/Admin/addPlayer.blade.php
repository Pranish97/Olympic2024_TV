<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="/css/addPlayer.css">
    <title>Add Player</title>
</head>

<body>
    <div class="container">
        <h2>Add Player</h2>

        <form action="{{ route('player.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="name-box">
                <label for="name">Name:</label>
                <input id="name" type="text" name="name" required onclick="changeStyleName()" onkeyup="onKeyUpName()">
            </div>
            <div class="image-box">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" onclick="changeStyleImage()" onchange="onFileSelect(this)"
                    required>
            </div>
            <div class="country-box">
                <label for="country">Country:</label>
                <select name="country" class="country" id="country">
                    <option value="">Select a country</option>
                    <option value="USA">United States</option>
                    <option value="UK">United Kingdom</option>
                    <option value="Canada">Canada</option>
                    <option value="Nepal">Nepal</option>
                    <option value="China">China</option>
                    <option value="India">India</option>
                    <option value="Japan">Japan</option>
                    <option value="France">France</option>
                    <option value="Italy">Italy</option>
                    <option value="Russia">Russia</option>
                </select>
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
            <button type="submit" class="addPlayer">Add Player</button>
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