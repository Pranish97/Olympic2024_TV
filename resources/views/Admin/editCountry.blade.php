<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="/css/addCountry.css">
    <title>Edit Country</title>
</head>

<body>
    <div class="container">
        <h2>Edit Country</h2>
        <form action="{{ route('country.update', $country->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="name-box">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $country->name }}" required onclick="changeStyleName()" onkeyup="onKeyUpName()">
            </div>
            <div class="image-box">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                <img src="{{ asset('images/countries/' . $country->image) }}" alt="{{ $country->name }}" style="max-width: 200px; margin-top: 10px;">
            </div>
            <div class="desc-box">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required onclick="changeStyleDesc()" onkeyup="onKeyUpDesc()">{{ $country->description }}</textarea>
            </div>
            <div class="total-box">
                <label for="total_medal">Total Medal:</label>
                <input type="text" class="form-control" id="total_medal" name="total_medal" value="{{ $country->total_medal }}" required onclick="changeStyleTotal()" onkeyup="onKeyUpTotal()">
            </div>
            <div class="gold-box">
                <label for="gold_medal">Gold Medal:</label>
                <input type="text" class="form-control" id="gold_medal" name="gold_medal" value="{{ $country->gold_medal }}" required onclick="changeStyleGold()" onkeyup="onKeyUpGold()">
            </div>
            <div class="silver-box">
                <label for="silver_medal">Silver Medal:</label>
                <input type="text" class="form-control" id="silver_medal" name="silver_medal" value="{{ $country->silver_medal }}" required onclick="changeStyleSilver()" onkeyup="onKeyUpSilver()">
            </div>
            <div class="bronze-box">
                <label for="bronze_medal">Bronze Medal:</label>
                <input type="text" class="form-control" id="bronze_medal" name="bronze_medal" value="{{ $country->bronze_medal }}" required onclick="changeStyleBronze()" onkeyup="onKeyUpBronze()">
            </div>
            <button type="submit" class="addCountry">Update</button>

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

        function changeStyleDesc() {
            var descInput = document.getElementById('description');
            descInput.classList.add('clicked-style');
        }

        function onKeyUpDesc() {
            var descInput = document.getElementById('description');
            descInput.classList.add('clicked-style');
        }

        function changeStyleTotal() {
            var totalInput = document.getElementById('total_medal');
            totalInput.classList.add('clicked-style');
        }

        function onKeyUpTotal() {
            var totalInput = document.getElementById('total_medal');
            totalInput.classList.add('clicked-style');
        }

        function changeStyleGold() {
            var goldInput = document.getElementById('gold_medal');
            goldInput.classList.add('clicked-style');
        }

        function onKeyUpGold() {
            var goldInput = document.getElementById('gold_medal');
            goldInput.classList.add('clicked-style');
        }

        function changeStyleSilver() {
            var silverInput = document.getElementById('silver_medal');
            silverInput.classList.add('clicked-style');
        }

        function onKeyUpSilver() {
            var silverInput = document.getElementById('silver_medal');
            silverInput.classList.add('clicked-style');
        }

        function changeStyleBronze() {
            var bronzeInput = document.getElementById('bronze_medal');
            bronzeInput.classList.add('clicked-style');
        }

        function onKeyUpBronze() {
            var bronzeInput = document.getElementById('bronze_medal');
            bronzeInput.classList.add('clicked-style');
        }
    </script>
</body>

</html>