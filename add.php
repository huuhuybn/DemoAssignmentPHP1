<html>

<body>

<h1>Nhập ảnh nền lên hệ thống</h1>

<form method="post" action="add.php" enctype="application/x-www-form-urlencoded">

    <input name="title" placeholder="Nhập tiêu đề cho ảnh">
    <input name="description" placeholder="Nhập mô tả cho ảnh">
    <input name="link" placeholder="Nhập link cho ảnh">
    <button type="submit">Save</button>

</form>

</body>

</html>
<?php
require 'Database.php';

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['link'])) {
    $title = $_POST['title'];
    $des = $_POST['description'];
    $link = $_POST['link'];
    // viết câu lệnh thêm vào database - bảng wallpaper
    $db = new Database();
    $query = $db->connect();
    $stmt = $query->prepare("INSERT INTO wallpaper (title,description,link,view,rate) VALUES (?,?,?,?,?)");
    $i = 5;
    $z = 0;
    $stmt->bind_param('sssii', $title, $des, $link, $z, $i);
    $ketqua = $stmt->execute();
    if ($ketqua) echo 'THEM THANH CONG!!!';
    else echo 'Co loi xay ra';
} else {
    echo "Vui long nhap day du gia tri";
}
