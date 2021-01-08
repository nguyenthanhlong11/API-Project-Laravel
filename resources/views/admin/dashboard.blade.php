<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style>
      h1{
        font-family:Verdana, Geneva, Tahoma, sans-serif;
      }
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #d8d0d0;
          height: 100%;
        }
        
        li a {
          display: block;
          color: #000;
          padding: 8px 16px;
          text-decoration: none;
        }
        
        li a.active {
          background-color: #4CAF50;
          color: white;
        }
        
        li a:hover:not(.active) {
          background-color: #555;
          color: white;
        }
        .content{
          display: flex;
        }
        .first_1{
          flex:5;
        }
        .logo{
          margin-right: 500px;
        }
        .menu_block{
          height: 550px;
          width:200px;
          flex:1;
        }
        .footer{
          height:50px;
          background-color: black;
        }
        </style>

</head>
<body>
    <div class="content">
    <div class="menu_block">
        <div class="logo">
          <img width="170px" height="100px" src="/Img/Windy final.png" alt="">
        </div>
            <ul>
                <li><a class="active" href="{{'/admin'}}">Trang chủ</a></li>
                <li><a href="{{'/home/product/'}}">Sản phẩm</a></li>
                <li><a href="{{'/home/category/'}}">Loại sản phẩm</a></li>
                <li><a href="{{'/home/order/'}}">Đơn hàng</a></li>
                <li><a href="{{'/home/user/'}}">Người dùng</a></li>
               
              </ul>
        </div>
      <div class="first_1">
        <marquee>
      
          <h1>Chào mừng đến với trang quản lý</h1>
      
        </marquee>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./Img/slideshow/slide1.jpg" class="d-block w-100" alt="" width="100%" height="600">
            </div>
            <div class="carousel-item">
              <img src="./Img/slideshow/slide2.jpg" class="d-block w-100" alt="" width="100%" height="600">
            </div>
            <div class="carousel-item">
              <img src="./Img/slideshow/slide3.jpg" class="d-block w-100" alt="" width="100%" height="600">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
        </div>   
       </div>
        
        
    </div>
    <div class="footer"></div>
</body>
</html>