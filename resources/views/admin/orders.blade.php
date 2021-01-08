<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User</title>
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
        <h1>Quản lý đơn hàng</h1>
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
            <th>Id đơn hàng</th>
            <th>Tên khách hàng</th>
            <th>Ngày đặt hàng</th>
            <th>Tổng tiền</th>
            <th>Xem chi tiết</th>
          </tr>
          @foreach($data as $order)
          <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->name}}</td>
            <td>{{substr($order->created_at, 0, -8)}}</td>
            <td>{{$order->sum_salary}}</td>
            <td><a href="detail/{{$order->id}}"><button type="submit" class="btd">Xem</button></a></td>
          </tr>
          @endforeach
        </table>
        <form action="/admin/user" method="get">
          @csrf
        </form>

      </div>

    </div>

  </div>
</body>
</html>