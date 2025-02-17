<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">CarShop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home </a>
            </li>

            <li class="nav-item ">
                @if(Route::has('login'))
                    @auth
                        <a class="nav-link" href="/admin/products">Products </a>
                        <a class="nav-link" href="/admin/products/create">Create Products </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                           class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth

                @endif
            </li>



        </ul>
    </div>
</nav>

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
                <td>
                    <img src="{{ asset('storage/photos/' . $product->photo) }}" width="50" alt="">
                </td>
                <td>

                    <form method="post" action="{{route('products.destroy',$product)}}">

                    <a class="btn btn-info" style="color:white" href="{{route('products.edit',$product)}}">edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
    {{$products->links()}}

</div>
</body>
</html>
