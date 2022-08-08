<?php

require 'Database.php';
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['link'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $link = $_POST['link'];
    $db = new Database();
    $query = $db->connect();
    $update = "UPDATE wallpaper SET title='$title',description='$description',link='$link' WHERE id='$id'";
    if ($query->query($update)) {
        echo "UPDATE THANH CONG";
    }
} else {
    echo 'Dien day du thong tin nhe ban';
}
