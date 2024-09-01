<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phuong thuc POST</title>
</head>
<body>
    <h2>Nhập thông tin sách</h2>
    <form action="" method="post">
    <label for="book_name">Tên sách:</label>
    <input type="text" name="book_name" id="book_name" required> <br><br>
    
    <label for="author">Tác giả:</label>
    <input type="text" id="author" name="author" required><br><br>

    <label for="publisher">Nhà xuất bản:</label>
    <input for="text" id="publisher" name="publisher" required> <br><br>


    <label for="year">Năm xuất bản:</label>
    <input type="number" id="year" name="year" required>

    <input type="submit" value="Gửi">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD']== 'POST' ){
        //lấy dữ liệu từ phương thức get

        $book_name = $_POST['book_name'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $year = $_POST['year'];

        echo"<h2>Nhập thông tin sách</h2>";
        echo"Tên sách: ". htmlspecialchars($book_name) . "<br>";
        echo "Tác giả: " . htmlspecialchars($author) . "<br>";
        echo "Nhà xuất bản: " . htmlspecialchars($publisher) . "<br>";
        echo "Năm xuất bản: " . htmlspecialchars($year) . "<br>";
    }
    ?>

<button style="
    width: 70px;
    background-color: rgba(218, 210, 210, 0.3);
    border: 3px solid black;
    cursor: pointer;
    height: 70px;
    border-radius: 10px;
    border: none;
    display: inline-block;
    position: fixed;
    right: 0px;
    bottom: 0px;"
>
    <a href="http://laptrinhwebkhoabeo.000.pe">
    <img src="home1.png" style="width: 60%;"></a>
</button>
</body>
</html>