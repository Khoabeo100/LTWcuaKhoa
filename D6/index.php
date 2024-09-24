<?php
$servername = "localhost";
$username = "root";
$password = "123123";
$dbname = "b5_mydy";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý yêu cầu xóa nhân viên
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM MyGuests WHERE id=$delete_id";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success-message'>Xóa dữ liệu thành công.</p>";
    } else {
        echo "<p class='error-message'>Lỗi khi xóa dữ liệu: " . $conn->error . "</p>";
    }
}

// Xử lý yêu cầu sửa thông tin nhân viên
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "UPDATE MyGuests SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success-message'>Cập nhật dữ liệu thành công.</p>";
    } else {
        echo "<p class='error-message'>Lỗi khi cập nhật dữ liệu: " . $conn->error . "</p>";
    }
}

// Xử lý yêu cầu chèn dữ liệu mới
if (isset($_POST['insert'])) {
    $firstname = $_POST['new_firstname'];
    $lastname = $_POST['new_lastname'];
    $email = $_POST['new_email'];

    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success-message'>Chèn dữ liệu thành công.</p>";
        echo "<script>setTimeout(function() { document.querySelector('.success-message').style.display = 'none'; }, 2000);</script>";
    } else {
        echo "<p class='error-message'>Lỗi khi chèn dữ liệu: " . $conn->error . "</p>";
    }
}

// Lấy danh sách nhân viên
$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .action-buttons a {
            text-decoration: none;
            padding: 8px 12px;
            margin-right: 5px;
            color: white;
            border-radius: 5px;
        }

        .edit-btn {
            background-color: #28a745;
        }

        .delete-btn {
            background-color: #dc3545;
        }

        form {
            margin-top: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        form input[type="text"], form input[type="email"] {
            width: calc(100% - 24px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        form input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .success-message, .error-message {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            color: white;
            text-align: center;
        }

        .success-message {
            background-color: #28a745;
        }

        .error-message {
            background-color: #dc3545;
        }

        .insert-form {
            margin-top: 20px;
        }

        .insert-form h2, .edit-form h2 {
            text-align: center;
        }

        .toggle-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .toggle-btn:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function toggleInsertForm() {
            const form = document.querySelector('.insert-form');
            if (form.style.display === 'none' || form.style.display === '') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        }

        function hideMessage() {
            setTimeout(function() {
                const messages = document.querySelectorAll('.success-message, .error-message');
                messages.forEach(function(message) {
                    message.style.display = 'none';
                });
            }, 2000);
        }

        document.addEventListener('DOMContentLoaded', hideMessage);
    </script>
</head>
<body>
    <div class="container">
        <h1>Danh sách nhân viên</h1>
        <button class="toggle-btn" onclick="toggleInsertForm()">Chèn nhân viên mới</button>
        
        <!-- Form chèn nhân viên mới -->
        <div class="insert-form" style="display: none;">
            <h2>Chèn nhân viên mới</h2>
            <form action="index.php" method="post">
                <label for="new_firstname">Firstname:</label>
                <input type="text" name="new_firstname" required><br>
                <label for="new_lastname">Lastname:</label>
                <input type="text" name="new_lastname" required><br>
                <label for="new_email">Email:</label>
                <input type="email" name="new_email" required><br>
                <input type="submit" name="insert" value="Chèn dữ liệu">
            </form>
        </div>

        <table>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Reg_Date</th>
                <th>Actions</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['firstname']}</td>
                            <td>{$row['lastname']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['reg_date']}</td>
                            <td class='action-buttons'>
                                <a class='edit-btn' href='index.php?edit_id={$row['id']}'>Edit</a>
                                <a class='delete-btn' href='index.php?delete_id={$row['id']}'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Không có dữ liệu.</td></tr>";
            }
            ?>
        </table>

        <!-- Form chỉnh sửa nhân viên -->
        <?php
        if (isset($_GET['edit_id'])) {
            $edit_id = $_GET['edit_id'];
            $sql = "SELECT * FROM MyGuests WHERE id=$edit_id";
            $edit_result = $conn->query($sql);
            if ($edit_result->num_rows > 0) {
                $edit_row = $edit_result->fetch_assoc();
        ?>
        <div class="edit-form">
            <h2>Chỉnh sửa nhân viên</h2>
            <form action="index.php" method="post">
                <input type="hidden" name="id" value="<?php echo $edit_row['id']; ?>">
                <label for="firstname">Firstname:</label>
                <input type="text" name="firstname" value="<?php echo $edit_row['firstname']; ?>" required><br>
                <label for="lastname">Lastname:</label>
                <input type="text" name="lastname" value="<?php echo $edit_row['lastname']; ?>" required><br>
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $edit_row['email']; ?>" required><br>
                <input type="submit" name="update" value="Cập nhật">
            </form>
        </div>
        <?php
            }
        }
        ?>

    </div>

    <?php $conn->close(); ?>
</body>
</html>
