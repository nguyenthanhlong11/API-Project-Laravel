<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Categories</title>
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
      height: 900px;
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

    #categories {
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
        <h1>Quản lý loại sản phẩm</h1>
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
            <th>Id loại sản phẩm</th>
            <th>Tên loại sản phẩm</th>
            <th>Cập nhật</th>
            <th>Xóa</th>
          </tr>
          @foreach($categories as $category)
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>
              <form action="{{'/category/index/'.$category->id.'/edit'}}" method="GET">
                @csrf
                <button type="submit" class="bte">Chỉnh sửa</button>
              </form>
            </td>
            <td>
              <form action="{{'/category/index/'.$category->id}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btd">Xóa</button>

              </form>
            </td>
          </tr>
          @endforeach
        </table>
        <form action="/admin/category/create" method="get">
          @csrf
          <center><button type="submit" class="add">
              Thêm loại sản phẩm
            </button></center>
        </form>
      </div>
    </div>
  </div>
</body>

</html>