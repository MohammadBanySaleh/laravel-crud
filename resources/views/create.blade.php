<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap 4 Table</title>
</head>

<body>
    <div class="container p-4">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="form-group">
                <label for="product-name">Product name</label>
                <input type="text" name="name" class="form-control" id="product-name" aria-describedby="nameHelp">
            </div>
            <label for="product-description">Product description</label>
            <div class="form-group">
                <textarea name="description" id="product-description" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">Product price</label>
                <input type="number" name="price" class="form-control" id="product-price" aria-describedby="nameHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap 4 JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js%22%3E"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js%22%3E"></script>
</body>

</html>