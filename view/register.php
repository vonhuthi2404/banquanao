<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Nhúng Bootstrap CSS từ CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Nhúng Bootstrap JS từ CDN (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../style/style.css">
    <style>

    </style>
</head>
<body>
            <header>
                <div class="account">
                <div class="container-fluid boder  ">
                    <div class="container ">
                    <div class="row text-center  ">
                        <div class="col-3">
                            <div class="row ">
                               
                                <div class="col-6">
                                    <li class="list-unstyled  py-2  boder-left   "><a class="text-decoration-none fs-6  text-black " href="./usercontroller.php?act=register">Đăng Ký</a></li>
                                </div>
                                <div class="col-6">
                                    <li class="list-unstyled py-2  boder-left boder-right" ><a class=" text-decoration-none fs-6 text-black " href="./usercontroller.php?act=login">Đăng Nhập</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">


                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-6">
                                    <li class="list-unstyled py-2  boder-left"  ><a class=" text-decoration-none fs-6 text-black " href="">Hướng dẫn</a></li>
                                </div>
                                <div class="col-6">
                                    <li class="list-unstyled py-2  boder-left boder-right" ><a class=" text-decoration-none fs-6 text-black " href="">Đơn hàng</a></li>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
             <div class="logo">
                <div class="container my-2">
                    <div class="row  ">
                        <div class="col-3 p-0">
                            <img src="../images/logo.webp" style="width: 131px; height: 84px;" alt="">
                        </div>
                        <div class="col-7 mt-3  ">
                            <div class="row">
                                <div class="col-7 p-0 d-flex">
                                    <div class="logo-vc" style="width: 20%;" >
                                        <img src="../images/car.webp" style="width: 55px; height: 55px; border-radius:30px; background: #66a182;" alt="">
                                    </div>
                                    <div class="title-vc" style="width: 80%;">
                                        <p class="m-0 color-logo "  >Miễn phí vận chuyển</p>
                                        <span  >Với đơn hàng trị giá trên <strong>1.000.000đ</strong> </span>
                                    </div>
                                </div>
                                <div class="col-5 p-0 d-flex">
                                    <div class="logo-vc" style="width: 20%;" >
                                        <img src="../images/phone.webp" style="width: 55px; height: 55px; border-radius:30px; background: #66a182;" alt="">
                                    </div>
                                    <div class="title-vc" style="width: 80%;">
                                        <p class="m-0 color-logo "  >Đặt hàng nhanh</p>
                                        <span  >Gọi ngay  <strong>0958475757</strong> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 mt-3 p-0">
                            <div class="row">
                                <div class="logo-vc" style="width: 30%;" >
                                    <img src="../images/cart.webp" style="width: 55px; height: 55px; border-radius:30px; background: #66a182;" alt="">
                                </div>
                                <div class="title-vc" style="width: 70%;">
                                  <p class="m-0"> <a href="./usercontroller.php?act=cart" class="text-decoration-none color-logo">Giỏ hàng</a></p>
                                    <span>(2) Sản phẩm </span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
             </div>
             <div class="menu mt-1">
                <div class="container-fluid bg-dark ">
                    <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <ul class="d-flex p-0 m-0 w-100  " >
                                <li style="background: #66a182;"  class="list-unstyled p-3 boder-right-menu   " ><a  class=" text-white  text-decoration-none" href="./usercontroller.php?act=index">TRANG CHỦ</a></li>
                                    <li class="list-unstyled p-3 boder-right-menu   " ><a class=" text-white  text-decoration-none" href="./usercontroller.php?act=introduce">GIỚI THIỆU</a></li>
                                    <li class="list-unstyled p-3 boder-right-menu   " ><a class=" text-white  text-decoration-none" href="./usercontroller.php?act=product">SẢN PHẨM</a></li>
                                    <li class="list-unstyled p-3 boder-right-menu   " ><a class=" text-white  text-decoration-none" href="./usercontroller.php?act=news">TIN TỨC</a></li>
                                    <li class="list-unstyled p-3 boder-right-menu   " ><a class=" text-white  text-decoration-none" href="./usercontroller.php?act=contact">LIÊN HỆ</a></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                    <div class="search  d-flex">
                                        <input class="search-import" placeholder="Tìm kiếm tại đây..." type="text" name="" id="">
                                        <input  class="search-submit text-white" type="submit" value="Tìm kiếm">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            </header>

            <main>
                <div class="container">
                   
                   <div class="info mt-3 d-flex">
                    <a class=" text-decoration-none " style="color: black;" href="../index.php">Trang chủ</a>
                    <p style="padding-left: 1vw; color: #66a182;">Đăng ký tài khoản</p>
                   </div>
                   <div class="info-1">
                    <hr>
                   <h5 class="mt-3">THÔNG TIN CÁ NHÂN</h5>
                   </div>

                   <div class="row justify-content-between">
                    

                   
                    <div class="col-6  ">
                        <form action="">
                            <label class="mt-4" for="">Họ :</label><br>
                            <input class="mt-1" style="width: 100%; height: 3vw; border: #ccc solid 1px;" type="text" name="" id="">

                            <label  class="mt-4" for="">Email :</label><br>
                            <input class="mt-1" style="width: 100%; height: 3vw; border: #ccc solid 1px;" type="text" name="" id="">

                            <label  class="mt-4" for="">Mật khẩu :</label><br>
                            <input class="mt-1" style="width: 100%; height: 3vw; border: #ccc solid 1px;" type="text" name="" id="">
                        </form>

                        <div class="submitt">
                            <div class="row mt-5">
                                <div class="col-3">
                                    
                                        <input style="width: 8vw; height: 3vw; background: #66a182; border: none;color:white; " type="button" value="Đăng ký">
                                    
                                </div>
                                <div class="col-2">
                                    <a href="./usercontroller.php?act=login">
                                        <input style="width: 8vw; height: 3vw; background: #66a182; border: none;color:white;" type="button" value="Đăng nhập">
                                    </a>
                                </div>
                                <div class="col-7"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6  ">
                        <form action="">
                            <label class="mt-4" for="">Tên :</label><br>
                            <input class="mt-1" style="width: 100%; height: 3vw; border: #ccc solid 1px;" type="text" name="" id="">

                            <label  class="mt-4" for=""> Số đện thoại :</label><br>
                            <input class="mt-1" style="width: 100%; height: 3vw; border: #ccc solid 1px;" type="text" name="" id="">

                           
                        </form>
                    </div>

            
                   </div>
                   
                </div>
            </main>

            <footer>
                <div class="container-full mt-5">
                    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
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
          © 2021 Copyright:
          <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
                </div>
            </footer>
        </body>
        </html>