<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .container {
            width: 50%;
            padding: 10px;
            position: absolute;
            left: 0;
            top: 50;
            right: 0;
            bottom: 50;
            margin: auto;
            background-color: white;
            background-size: cover;
            margin-top: 50px;
            border-style: solid;
            border-width: 8px;
            border-color: #4CAF50;
        }

        .note {
            text-align: left;
            color: black;
            font-weight: bold;
            font-style: italic;

        }

        .title {
            text-align: center;
            font-weight: bold;
            color: green;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .form-content {
            padding: 5%;
            border: 1px solid #ced4da;
            margin-bottom: 2%;
        }

        .form-control {
            border-radius: 1.5rem;
        }

        .table {
            font-weight: none;
            border-color: darkred;
            text-align: center;
            background-color: mintcream;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .table>thead {
            background-color: #4CAF50;
            color: white;
            position: relative;
            margin: auto;
            text-align: center;
        }

        .table>tbody {
            text-align: left;
        }

        .close {
            text-align: right;
            margin-top: 0px;
        }
    </style>
</head>

<body>
    <div class="container register-form">
        <div class="close">
            <button><a href="{{'/home/order/'}}">X</a></button>
        </div>
        <div class="title">
            <p>Thông tin chi tiết đơn hàng</p>
            <hr />
        </div>
        <div class="form">
            @foreach($data as $data)
                <div class="note">
                    <p>Tên khách hàng: {{$data->name}}</p>
                    <p>Địa chỉ: {{$data->address}}</p>
                    <p>Số điện thoại: {{$data->phone_number}}</p>
                </div>
                <div class="form-content">
                    <div class="modal-body mx-3">
                        <table class="table table-bordered table table-hover">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(json_decode($data->product) as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->quantity }}</td>
                                        <td>{{$product->quantity * $product->price}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            @endforeach
        </div>

</body>

</html>