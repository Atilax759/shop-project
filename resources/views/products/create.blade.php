<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="">
    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div>
            <div class="">
                <input name="title" placeholder="Name" type="text">
            </div>
            <div class="">
                <input name="price" placeholder="Price" type="text">
            </div>
            <div class="">
                <input name="discount" placeholder="Discount" type="text">
            </div>
            <div class="">
                <input name="description" placeholder="Description" type="text">
            </div>
            <div class="">
                <input name="photo" placeholder="Photo" type="file">-
            </div>
            <button type="submit">save</button>
        </div>
    </form>
</div>
</body>
</html>
