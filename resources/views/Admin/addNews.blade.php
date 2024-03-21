<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </script>
    <link rel="stylesheet" href="/css/addNews.css">
    <title>Add News</title>
</head>

<body>
    <div class="container">
        <h2>Add News</h2>

        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title-box">
                <label for="title">Title:</label>
                <input id="title" type="text" name="title" required onclick="changeStyleTitle()" onkeyup="onKeyUpTitle()">
            </div>
            <div class="image-box">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" onclick="changeStyleImage()" onchange="onFileSelect(this)" required>
            </div>
            <div class="description-box">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required onclick="changeStyleDescription()" onkeyup="onKeyUpDescription()"></textarea>
            </div>
            <button type="submit" class="addNews">Add News</button>
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

        function changeStyleImage() {
            var imageInput = document.getElementById('image');
            imageInput.classList.add('clicked-style');
        }

        function onFileSelect(input) {
            var fileName = input.files[0].name;
            var label = input.nextElementSibling;
            label.innerText = fileName;
        }

        function changeStyleDescription() {
            var descriptionInput = document.getElementById('description');
            descriptionInput.classList.add('clicked-style');
        }

        function onKeyUpDescription() {
            var descriptionInput = document.getElementById('description');
            descriptionInput.classList.add('clicked-style');
        }
    </script>

</body>

</html>