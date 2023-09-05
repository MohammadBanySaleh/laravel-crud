<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap 4 Table</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Product 1</td>
                    <td>Description 1</td>
                    <td>$19.99</td>
                    <td>
                        <a class="btn btn-primary" href="edit/id">Edit</a>
                        <a class="btn btn-danger" href="delete/id">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Product 2</td>
                    <td>Description 2</td>
                    <td>$29.99</td>
                    <td>
                        <a class="btn btn-primary" href="edit/id">Edit</a>
                        <a class="btn btn-danger" href="delete/id">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap 4 JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
