<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ceramics Shop</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/web.css">
    </head>
    <body>
        @extends('layout')
        @section('content')
        <div class="container">
            <div class="navbar">
                <img src="https://www.pngrepo.com/download/264401/bee.png" class="logo">
                <nav>
                    <ul>
                        <li><a href="/">{{__('lang.home')}}</a></li>
                        <li><a href="/categories">{{__('lang.categories')}}</a></li>
                    </ul>
                </nav>
                <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG38.png" class="cart">
            </div>


            <div class="categories_main">
                @foreach($categories as $category)
                <div class="panel">
                    <a href="/{{ $category -> code }}"><img id="small" src="https://www.pngrepo.com/png/112567/512/dishes.png">
                    <h2>{{ $category -> name }}</h2></a>
                    <p>{{ $category -> description }}</p>
                </div>
                @endforeach
            </div>

            
        </div>
        @endsection
    </body>
</html>