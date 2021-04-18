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

                <div class="panel">
                    <!--<a href="#"><img id="small" src="https://img.pngio.com/art-icons-600-free-files-in-png-eps-svg-format-art-png-images-black-and-white-512_512.png">-->
                    <h2>Арт</h2></a>
                    <p>Декоративные вазы, статуэтки, абстрактные композиции</p>
                </div>

                <div class="cards">
                    <img src="https://st21.stblizko.ru/images/product/410/282/905_big.jpg">
                    <div class="card-body">
                        <h3 class="card-title">Декоративная ваза</h3>
                        <h4>15000 T</h4>
                        <h5>Описание Описание Описание Описание Описание </h5>
                        <button type="submit" class="btn btn-primary" role="button">{{__('lang.cart')}}</button>
                    </div>
                </div>
            </div>

            
        </div>
        @endsection
    </body>
</html>