<?php

require 'Database.php';
$id = $_GET['id'];

$db = new Database();
$query = $db->connect();

$delete = "DELETE FROM wallpaper WHERE id='$id'";

$ketqua = $query->query($delete);

if ($ketqua) echo 'Xoa thanh cong';
else echo 'co loi xay ra';