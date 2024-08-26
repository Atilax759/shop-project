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
    <form action="{{route('products.update',$product)}}" method="post">
        @csrf
        @method('PATCH')
        <h1 class="text-center mt-5">Edit Product {{$product->title}}</h1>
        <div class="container offset-5 mt-5">
            <div class="">
                <input value="{{$product->title}}" name="title" placeholder="Title" type="text">
                <div class="">
                    <small class="text-danger">@error('title') {{$message}} @enderror</small>
                </div>
            </div>
            <div class="">
                <input value="{{$product->price}}" name="price" placeholder="Price" type="text">
                <div class="">
                    <small class="text-danger">@error('price') {{$message}} @enderror</small>
                </div>
            </div>
            <div class="">
                <input value="{{$product->discount}}" name="discount" placeholder="Discount" type="text">
                <div class="">
                    <small class="text-danger">@error('discount') {{$message}} @enderror</small>
                </div>
            </div>
            <div class="">
                <input value="{{$product->description}}" name="description" placeholder="Description" type="text">
                <div class="">
                    <small class="text-danger">@error('description') {{$message}} @enderror</small>
                </div>
            </div>
            <div class="">
                <input value="{{$product->photo}}" name="photo" placeholder="Photo" type="file">
                <div class="">
                    <small class="text-danger">@error('photo') {{$message}} @enderror</small>
                </div>
            </div>
            <button type="submit">save</button>
        </div>
    </form>
</div>
</body>
</html>
