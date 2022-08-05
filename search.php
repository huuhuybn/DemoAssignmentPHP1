<html>

<body>

<h1>Search wallpaper</h1>

<form method="post" action="search.php" enctype="application/x-www-form-urlencoded">
    <input name="text" placeholder="Enter the text...">
    <button type="submit">Search</button>
</form>

</body>

</html>

<?php
require 'Database.php';

if (isset($_POST['text'])) {
    // lay ra gia tri text can tim kiem
    $text = $_POST['text'];
    // mo ket noi den database
    $db = new Database();
    $query = $db->connect();

    $timkiem = "SELECT * FROM wallpaper WHERE title LIKE '%$text%'";

    $ketqua = $query->query($timkiem);

    // doc ket qua - kiem tra so luong
    if ($ketqua->num_rows > 0) {
        while ($row = $ketqua->fetch_assoc()){
            echo $row['id'] . " || " . $row['title'] . " || " . $row['description'] . '<br>';
            $link = $row['link'];
            printf('<img width="100px" height="100px" src="%s">', $link);
            echo 'Luot xem : '. $row['view'];
            printf('<a href="/delete.php?id=%s">Delete</a>', $row['id']);
            echo '<hr>';
        }
    } else {
        echo 'NOT FOUND';
    }
} else echo 'Ente the text to search...';

