<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sách</title>
    <style>
        table {
            width: 30%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Danh sách 100 cuốn sách</h1>

    <table>
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Nội dung sách</th>
        </tr>

        <?php
    
        $books = [];
        for ($i = 1; $i <= 100; $i++) {
            $books[] = [
                'name' => "Tên Sách $i",
                'content' => "Nội dung của sách $i "
            ];
        }


        foreach ($books as $index => $book) {
            echo "<tr>";
            echo "<td>" . ($index + 1) . "</td>";
            echo "<td>" . htmlspecialchars($book['name']) . "</td>";
            echo "<td>" . htmlspecialchars($book['content']) . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

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
