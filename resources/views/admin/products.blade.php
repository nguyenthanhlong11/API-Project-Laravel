<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Loại sản phẩm</title>
  <style>
    h1 {
      text-align: center;
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

    .first_1 {
      display: flex;
    }

    .logo {
      margin-right: 500px;
    }

    .menu_block {
      height: auto;
      display: flex;
    }

    #categories {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #categories td,
    #categories th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #categories td img{
      height: 60px;
      width: 70px;
    }

    #categories tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #categories tr:hover {
      background-color: #ddd;
    }

    #categories th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }

    .menu {
      margin-right: 100px;
    }

    .add {
      margin-top: 30px;
    }

    #categories{
      width: 1165px;
    }
    
  </style>

</head>

<body>
  <div>
    <div class="first_1">
      <div class="logo">
        <img width="170px" height="100px" src="/Img/Windy final.png" alt="">
      </div>
      <div>
        <h1>Quản lý sản phẩm</h1>
      </div>


    </div>

    <div class="menu_block">
      <div class="menu">
        <ul>
          <li><a class="active" href="{{'/admin'}}">Trang chủ</a></li>
          <li><a href="{{'/home/product/'}}">Sản phẩm</a></li>
          <li><a href="{{'/home/category/'}}">Loại sản phẩm</a></li>
          <li><a href="{{'/home/order/'}}">Đơn hàng</a></li>
          <li><a href="{{'/home/user/'}}">Người dùng</a></li>

        </ul>
      </div>
      <div>
        <table id="categories">
          <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Chi tiết</th>
            <th>Loại</th>
            <th>Chỉnh sửa</th>
            <th>Xóa</th>
          </tr>
          @foreach($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>
              <img src="/storage/{{$product->image}}" >
            </td>
            <td>{{$product->detail}}</td>
            <td>
              @foreach($categories as $category)
              @if($product->category_id == $category->id)
              {{$category->name}}
              @endif
              @endforeach
            </td>
            <td>

              <a href="/product/{{$product->id}}/edit"><button class="bte">Chỉnh sửa</button></a>


            </td>
            <td>

              <a href="/product/{{$product->id}}/delete"> <button type="submit" class="btd">Xóa</button></a>


            </td>
          </tr>
          @endforeach
        </table>

        <center><a type="button" href="/admin/product/add"><button class="add">
              Thêm sản phẩm mới</button>
          </a></center>
      </div>
    </div>
  </div>
</body>

</html>