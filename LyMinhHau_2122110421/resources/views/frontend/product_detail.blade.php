@extends ('layouts.site')
@section('title','Chi tiết sản phẩm')
@section('content')
<div>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
        <link rel="stylesheet" href="assets/bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/productdetail.css" />
        <link rel="stylesheet" href="{{asset('css/productdetail.css')}}">

      </head>
          <nav>
              <div class="logo"></div>
              <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Products</a></li>
                  <li><a href="#">Offers</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <i class="fas fa-shopping-cart"></i>
              </ul>
          </nav>
      
          <div class="flex-box">
              <div class="left">
                  <div class="big-img">
                    <img src="{{asset('img/2.webp')}}" alt="Denim Jeans" style="width:100%">
                  </div>
                  <div class="images">
                      <div class="small-img">
                        <img src="{{asset('img/13.webp')}}" alt="Denim Jeans" style="width:100%">                      </div>
                      <div class="small-img">
                        <img src="{{asset('img/14.webp')}}" alt="Denim Jeans" style="width:100%">                      </div>
                      <div class="small-img">
                        <img src="{{asset('img/15.webp')}}" alt="Denim Jeans" style="width:100%">                      </div>
                      <div class="small-img">
                        <img src="{{asset('img/16.webp')}}" alt="Denim Jeans" style="width:100%">                      </div>
                  </div>
              </div>
      
              <div class="right">
                  <div class="url">Home > Product > T-Shirt</div>
                  <div class="pname">Kính Thực Tế Ảo Meta Quest 3 (128GB - White - Mới, Full box, Nhập khẩu)</div>
                  <div class="ratings">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                  </div>
                  <div class="price">16.000.000VND</div>
                  <div class="size">
                      
               
                  </div>
                  <div class="quantity">
                      <p>Quantity :</p>
                      <input type="number" min="1" max="5" value="1">
                  </div>
                  <div class="btn-box">
                      <button class="cart-btn">Add to Cart</button>
                      <button class="buy-btn">Buy Now</button>
                  </div>
              </div>
          </div>
      
      
          <script>
              let bigImg = document.querySelector('.big-img img');
              function showImg(pic){
                  bigImg.src = pic;
              }
          </script>
      
        <!-- JavaScript -->
        <script src="assets/jquery/jquery-3.7.1.min.js"></script>
        <script src="assets/bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/layoutsite.js"></script>
      </body>
</div>
@endsection