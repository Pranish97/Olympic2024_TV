<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="/css/country.css">
    <title>Add Country</title>
</head>

<body>
    <div class="container">
        <h2>Add Country</h2>

        <form action="{{ route('countries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="name-box">
                <label for="name">Country Name:</label>
                <input id="name" type="text" name="name" required onclick="changeStyleName()" onkeyup="onKeyUpName()">
            </div>
            <div class=" image-box">
                <label for="image">Country Image:</label>
                <input type="file" name="image" accept="image/*" required>
            </div>
            <div class="path-box">
                <label for="path">Page Path:</label>
                <input id="path" type="text" name="path" required onclick="changeStylePath()" onkeyup="onKeyUpPath()">
            </div>
            <button type="submit" class="addCountry">Add Country</button>
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

        function changeStylePath() {
            var pathInput = document.getElementById('path');
            pathInput.classList.add('clicked-style');
        }

        function onKeyUpPath() {
            var pathInput = document.getElementById('path');
            pathInput.classList.add('clicked-style');
        }
    </script>
</body>

</html>