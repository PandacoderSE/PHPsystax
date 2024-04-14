<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Mẫu</title>
<style>
* {
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
}
nav {
  background-color: #333;
}
nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
  position: relative;
}
nav ul li {
  display: inline-block;
  background-color: #333;
}
nav a {
  display: block;
  padding: 0 15px;
  color: white;
  font-size: 20px;
  line-height: 60px;
  text-decoration: none;
}
nav ul ul {
  display: none;
  position: absolute;
  top: 60px;
}
nav ul li:hover > ul {
  display: inherit;
}
nav ul ul li {
  width: 200px;
  float: none;
  display: list-item;
  position: relative;
}
nav ul ul ul li {
  position: relative;
  top: -60px;
  left: 200px;
}
li > a:after { content: ' ▼'; }
li > a:only-child:after { content: ''; }
</style>
</head>
<body>
<nav>
  <ul>
    <li><a href="#">Trang Chủ</a></li>
    <li><a href="#">Sản Phẩm</a>
      <ul>
        <li><a href="#">Sản Phẩm 1</a></li>
        <li><a href="#">Sản Phẩm 2</a></li>
        <li><a href="#">Sản Phẩm 3</a></li>
        <li><a href="#">Sản Phẩm 4</a></li>
      </ul>
    </li>
    <li><a href="#">Dịch Vụ</a>
      <ul>
        <li><a href="#">Dịch Vụ 1</a></li>
        <li><a href="#">Dịch Vụ 2</a></li>
        <li><a href="#">Dịch Vụ 3</a></li>
      </ul>
    </li>
    <li><a href="#">Liên Hệ</a></li>
  </ul>
</nav>
</body>
</html>
