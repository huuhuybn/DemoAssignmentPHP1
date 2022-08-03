<html>

<body>

<h1>Welcome to HD Wallpaper</h1>

<?php

require 'Database.php';

$db = new Database();
$query = $db->connect();

$select = "SELECT * FROM wallpaper";

$ketqua = $query->query($select); // lay danh sach sinh vien

echo 'So luong : ' . $ketqua->num_rows . '<br>';

if ($ketqua->num_rows > 0) {
    while ($row = $ketqua->fetch_assoc()) {
        echo $row['id'] . " || " . $row['title'] . " || " . $row['description'] . '<br>';
        $link = $row['link'];
        printf('<img width="100px" height="100px" src="%s">', $link);
        echo 'Luot xem : '. $row['view'];
        printf('<a href="/delete.php?id=%s">Delete</a>', $row['id']);
        echo '<hr>';
    }
} else {
    echo ' ko co hinh nen nao';
}
?>
</body>

</html>

