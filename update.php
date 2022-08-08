<html>

<body>
<h1>Update Wallpaper</h1>
<form method="post" action="/DemoAssignment/formUpdate.php" enctype="application/x-www-form-urlencoded">
    <?php

    session_start();

    print_r($_SESSION['poly']);
    require 'Database.php';
    if (isset($_GET['id'])) {
        $db = new Database();
        $query = $db->connect();
        $id = $_GET['id'];
        $item = "SELECT * FROM wallpaper WHERE id='$id'";

        $data = $query->query($item);

        printf('<input name="id" value="%s">', $id);

        if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) {
                printf('<input name = "title" value="%s" placeholder = "Nhập tiêu đề cho ảnh" >', $row['title']);
                echo '<br>';
                printf('<input name = "description" value="%s" placeholder = "Nhập mô tả cho ảnh" >', $row['description']);
                echo '<br>';
                printf('<input name = "link" value="%s" placeholder = "Nhập link cho ảnh" >', $row['link']);
                echo '<br>';
            }
        }
        echo '<button type = "submit">Update</button>';
    }
    ?>
</form>
</body>
</html>





