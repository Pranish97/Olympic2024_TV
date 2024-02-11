<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="/css/link.css">
    <title>Add Links</title>
</head>

<body>
    <div class="container">
        <h2>Add Links</h2>

        <form action="{{ route('link.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="name-box">
                <label for="name">Title:</label>
                <input id="name" type="text" name="name" required onclick="changeStyleName()" onkeyup="onKeyUpName()">
            </div>
            <div class="desc-box">
                <label for="desc">Country Description:</label>
                <textarea id="desc" type="text" name="description" required onclick="changeStyleDesc()"
                    onkeyup="onKeyUpDesc()"></textarea>
            </div>
            <div class=" image-box">
                <label for="image">Country Image:</label>
                <input type="file" name="image" accept="image/*" required>
            </div>
            <div class="total-box">
                <label for="total">Total Medal:</label>
                <input id="total" type="text" name="total_medal" required onclick="changeStyleTotal()"
                    onkeyup="onKeyUpTotal()">
            </div>
            <div class="gold-box">
                <label for="gold">Gold Medal:</label>
                <input id="gold" type="text" name="gold_medal" required onclick="changeStyleGold()"
                    onkeyup="onKeyUpGold()">
            </div>
            <div class="silver-box">
                <label for="silver">Silver Medal:</label>
                <input id="silver" type="text" name="silver_medal" required onclick="changeStyleSilver()"
                    onkeyup="onKeyUpSilver()">
            </div>
            <div class="bronze-box">
                <label for="bronze">Bronze Medal:</label>
                <input id="bronze" type="text" name="bronze_medal" required onclick="changeStyleBronze()"
                    onkeyup="onKeyUpBronze()">
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

    function changeStyleDesc() {
        var descInput = document.getElementById('desc');
        descInput.classList.add('clicked-style');
    }

    function onKeyUpDesc() {
        var descInput = document.getElementById('desc');
        descInput.classList.add('clicked-style');
    }

    function changeStyleTotal() {
        var totalInput = document.getElementById('total');
        totalInput.classList.add('clicked-style');
    }

    function onKeyUpTotal() {
        var totalInput = document.getElementById('total');
        totalInput.classList.add('clicked-style');
    }

    function changeStyleGold() {
        var goldInput = document.getElementById('gold');
        goldInput.classList.add('clicked-style');
    }

    function onKeyUpGold() {
        var goldInput = document.getElementById('gold');
        goldInput.classList.add('clicked-style');
    }

    function changeStyleSilver() {
        var silverInput = document.getElementById('silver');
        silverInput.classList.add('clicked-style');
    }

    function onKeyUpSilver() {
        var silverInput = document.getElementById('silver');
        silverInput.classList.add('clicked-style');
    }

    function changeStyleBronze() {
        var bronzeInput = document.getElementById('bronze');
        bronzeInput.classList.add('clicked-style');
    }

    function onKeyUpBronze() {
        var bronzeInput = document.getElementById('bronze');
        bronzeInput.classList.add('clicked-style');
    }
    </script>
</body>

</html>