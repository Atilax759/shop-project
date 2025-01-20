<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <h1 class="text-center mt-5">All Products</h1>
<div class="container mt-5">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Discount</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->title}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discount}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->photo}}</td>
                <td>

                    <form method="post" action="{{route('products.destroy',$product)}}">

                    <a class="btn btn-info" style="color:white" href="{{route('products.edit',$product)}}">edit</a>
                        @csrf
                        @method('DELETE')                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
