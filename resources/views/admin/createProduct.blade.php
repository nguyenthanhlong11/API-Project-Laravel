<!DOCTYPE html>
<html>
<style>
  input[type=text],
  select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
</style>

<body>

  <center>
    <h3>Thêm sản phẩm</h3>
  </center>

  <div>
    <form action="/admin/product/add" method="post" enctype="multipart/form-data">
      @csrf
      <label for="name">Tên sản phẩm</label>
      <input type="text" id="name" name="name" placeholder="Nhập tên sản phẩm">

      <label for="price">Giá</label>
      <input type="text" id="price" name="price" placeholder="Nhập giá">

      <label for="image">Hình ảnh</label>
      <input type="file" id="image" name="image" placeholder="Image"><br>

      <label for="detail">Chi tiết</label>
      <input type="text" id="detail" name="detail" placeholder="Chi tiết">

      <label for="type">Loại sản phẩm</label>
      <select id="type" name="type">
        <option value=1>Thời trang nam</option>
        <option value=2>Thời trang nữ</option>
        <option value=3>Thời trang trẻ em</option>
      </select>

      <input type="submit" value="Thêm">
    </form>
  </div>

</body>

</html>