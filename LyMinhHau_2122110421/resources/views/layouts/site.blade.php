<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('header')
</head>
<body>
  <header>
    <img src="assets/img/Topbar-desk-1200x44-7.webp" alt="">
</header>
<nav>
    <div class="container">
        <ul>
            <li><a href=""><img style="width: 150px;" src="images/Logo.png" alt="Logo"></a></li>
            <li id="address-from"><a href="#">Đà Nẵng<i class="fa-solid fa-sort-down"></i></i></a></li>

            <li><input type="text" placeholder="Bạn cần tìm gì ?"><i class="fa-solid fa-magnifying-glass"></i></li>
            <li><a href=""></a><button><i class="fa-solid fa-cart-shopping"></i>Giỏ Hàng</button></li>
            <li><a href="">Lịch sử <br> đơn hàng</a></li>
            <li><a href=""><span class="btn-content"><span class="btn-top"></span></span> Tra sau!</a></li>
            <li><a href="">24h Công Nghệ</a></li>
            <li><a href="">Hỏi đáp</a></li>
            <li><a href="">Game app</a></li>
            <div class="address-from">
                <div class="address-from-content">
                    <h2>Địa Chỉ Nhận Hàng <span id="address-close">X Đóng</span></h2>
                    <form action="">
                        <p>Chọn đầy đủ địa chỉ nhận hàng để biết chính xác thời gian giao</p>
                        <select name="">
                            <option value="#">--Chọn Địa điểm--</option>
                            <option value="#">Đà Nẵng</option>
                        </select>
                        <select name="">
                            <option value="#">--Chọn Quận\Huyện--</option>
                            <option value="#">Đà Nẵng</option>
                        </select>
                        <select name="">
                            <option value="#">--Chon Phường\Xã--</option>
                            <option value="#">Đà Nẵng</option>
                        </select>
                        <input type="text" placeholder="Số nhà tên đường">
                        <button>Xác Nhận</button>
                    </form>
                </div>
            </div>
        </ul>
    </div>
</nav>
<section class="menu-bar">
    <div class="container">
        <div class="menu-bar-content">
            <ul>
                <li><a href=""><i class="fa-solid fa-blender-phone"></i>Điện thoại</a></li>
                <li><a href=""><i class="fa-sharp fa-solid fa-laptop"></i>Laptop</a></li>
                <li><a href=""><i class="fa-solid fa-tablet"></i></i>Tablet</a></li>
                <li><a href=""><i class="fa-solid fa-headphones"></i>Phụ Kiện <i style="margin-left: 3px;"
                            class="fa-solid fa-sort-down"></i></a>

                    <div class="submenu">
                        <ul>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                        </ul>
                    </div>

                </li>
                <li><a href=""><i class="fa-sharp fa-solid fa-alarm-clock"></i>Đồng Hồ</a></li>
                <li><a href=""><i class="fa-solid fa-watch-apple"></i>Đồng Hồ Thời Trang</a></li>
                <li><a href=""><i class="fa-solid fa-computer"></i>PC,Máy In <i style="margin-left: 3px;"
                            class="fa-solid fa-sort-down"></i></a>

                    <div class="submenu">
                        <ul>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                            <li><a href="">Phu Kien A</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="">Máy cũ giá rẻ</a></li>
                <li><a href="">Sim, thẻ cào</a></li>
                <li><a href="">Trả góp, điện nước</a></li>
            </ul>
        </div>
    </div>
</section>
    <main>
        @yield('content')
    </main>
    <footer><footer class="text-center text-lg-start bg-body-tertiary text-muted">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
  
        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Company name
              </h6>
              <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Products
              </h6>
              <p>
                <a href="#!" class="text-reset">Angular</a>
              </p>
              <p>
                <a href="#!" class="text-reset">React</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Vue</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Laravel</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6>
              <p>
                <a href="#!" class="text-reset">Pricing</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Settings</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
  
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        ©by MinhHau
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer --></footer>
    @yield('footer')
</body> 
</html>