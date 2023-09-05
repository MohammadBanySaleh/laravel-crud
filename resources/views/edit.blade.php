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
        <form method="POST" action="{{ url('update/'.$product->id) }}">
            @csrf
            @method('PUT');
            <div class="form-group">
              <label for="">Product name</label>
              <input type="text" class="form-control" value="{{ $product->name }}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <label for="">Product desctiption</label>
            <div class="form-group">
              <textarea name="pro_desc" id="" cols="30" rows="10">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="">Product Pice</label>
                <input type="text" class="form-control" value="{{ $product->price }}" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <!-- Bootstrap 4 JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js%22%3E</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js%22%3E</script>
</body>

</html>