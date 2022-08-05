<?php

require 'Demo.php';
$db = new Demo();
$query = $db->connect();

$select = "select * from wallpaper";

$ketqua = $query->query($select);

if ($ketqua->num_rows > 0) {
    while ($row = $ketqua->fetch_assoc()) {
        echo '<h1>' . $row['title'] . '</h1>';
    }
}