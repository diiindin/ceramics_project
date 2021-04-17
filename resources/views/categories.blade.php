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
                        <li><a href="">{{__('lang.home')}}</a></li>
                        <li><a href="">{{__('lang.categories')}}</a></li>
                    </ul>
                </nav>
                <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG38.png" class="cart">
            </div>


            <div class="categories_main">
                <div class="panel">
                    <a href="#"><img id="small" src="https://www.pngrepo.com/png/112567/512/dishes.png">
                    <h2>Посуда</h2></a>
                    <p>Чаши, тарелки, кружки и многое другое</p>
                </div>

                <div class="panel">
                    <a href="#"><img id="small" src="https://i.pinimg.com/originals/85/be/4c/85be4c3e233e9a3b3a831ed5cdaae666.png">
                    <h2>Аксессуары</h2></a>
                    <p>Уникальные и веселые кольца, подвески, органайзеры</p>
                </div>

                <div class="panel">
                    <a href="#"><img id="small" src="https://img.pngio.com/art-icons-600-free-files-in-png-eps-svg-format-art-png-images-black-and-white-512_512.png">
                    <h2>Арт</h2></a>
                    <p>Декоративные вазы, статуетки, абстарктные композиции</p>
                </div>
            </div>

            
        </div>
        @endsection
    </body>
</html>