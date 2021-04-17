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

            <div class="card-deck"> 
                <div class="cards">
                    <img src="https://i2.wp.com/kuhniclub.ru/wp-content/uploads/2016/10/keramicheskaya-posuda-2.jpg?resize=700%2C700&ssl=1">
                    <div class="card-body">
                        <h3 class="card-title">Набор тарелок Blue Sky</h3>
                        <h4>15000 T</h4>
                        <h5>Описание Описание Описание Описание Описание </h5>
                        <button type="submit" class="btn btn-primary" role="button">{{__('lang.cart')}}</button>
                    </div>
                </div>

                <div class="cards">
                    <img src="https://ae01.alicdn.com/kf/H770aef3cfef448e58cafc009cbe489970/-.jpg">
                    <div class="card-body">
                        <h3 class="card-title">Черная матовая тарелка</h3>
                        <h4>5000 T</h4>
                        <h5>Описание Описание Описание Описание Описание </h5>
                        <button type="submit" class="btn btn-primary" role="button">{{__('lang.cart')}}</button>
                    </div>
                </div>

                <div class="cards">
                    <img src="https://i.pinimg.com/originals/5f/63/33/5f6333a0a0ff76b51d59207279435f18.jpg">
                    <div class="card-body">
                        <h3 class="card-title">Кружка Marble</h3>
                        <h4>15000 T</h4>
                        <h5>Описание Описание Описание Описание Описание </h5>
                        <button type="submit" class="btn btn-primary" role="button">{{__('lang.cart')}}</button>
                    </div>
                </div>

                <div class="cards">
                    <img src="https://www.technodom.kz/media/catalog/product/cache/1366e688ed42c99cd6439df4031862c6/d/7/d791f10d897d0253147512a409e72f2f7b1e5982_219168_1.jpg">
                    <div class="card-body">
                        <h3 class="card-title">Керамическая кружка</h3>
                        <h4>15000 T</h4>
                        <h5>Описание Описание Описание Описание Описание </h5>
                        <button type="submit" class="btn btn-primary" role="button">{{__('lang.cart')}}</button>
                    </div>
                </div>

                <div class="cards">
                    <img src="https://aliradar.com/api/image?url=https%3A%2F%2Fae01.alicdn.com%2Fkf%2FH2d3e3599e30543df9ef18e50f2fd7eb9J%2F450ml-Korean-Cute-Pink-Strawberry-Ceramic-Cup-with-Lid-Spoon-Coffee-Mug-with-Handle-Ladies-Office.jpg_480x480.jpg_Q80.jpg">
                    <div class="card-body">
                        <h3 class="card-title">Розовые кружки Strawberry</h3>
                        <h4>15000 T</h4>
                        <h5>Описание Описание Описание Описание Описание </h5>
                        <button type="submit" class="btn btn-primary" role="button">{{__('lang.cart')}}</button>
                    </div>
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

            <div class="upload">
                <h1>{{__('lang.upload')}}</h1>
                <p>{{__('lang.send')}}</p>
                <form action="upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file"><br><br>
                    <button class="btn btn-primary" type="submit">{{__('lang.upl_btn')}}</button>
                </form>    
            </div>
        </div>
        @endsection
    </body>
</html>