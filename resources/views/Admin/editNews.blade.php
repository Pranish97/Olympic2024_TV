<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="/css/addNews.css">
    <title>Edit News</title>
</head>

<body>
    <div class="container">
        <h2>Edit News</h2>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="title-box">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}" required onclick="changeStyleTitle()" onkeyup="onKeyUpTitle()">
            </div>
            <div class="image-box">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                <img src="{{ asset('images/news/' . $news->image) }}" alt="{{ $news->title }}" style="max-width: 200px; margin-top: 10px;">
            </div>
            <div class="description-box">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required onclick="changeStyleDescription()" onkeyup="onKeyUpDescription()">{{ $news->description }}</textarea>
            </div>
            <button type="submit" class="addNews">Update</button>
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