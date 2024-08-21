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
            margin: 0 auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
        }
        .pagination a {
            margin: 0 5px;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ccc;
            color: #333;
        }
        .pagination a.active {
            background-color: #e91e63; 
            color: white;
            border: 1px solid #e91e63;
        }
        .pagination a:hover {
            background-color: #e91e63; 
            color: white;
        }
        .pagination a.disabled {
            color: #ccc;
            pointer-events: none;
            border-color: #ccc;
        }
    </style>
</head>
<body>

    <h1 style="text-align:center;">Danh sách 100 cuốn sách</h1>

    <?php

    $books = [];
    for ($i = 1; $i <= 100; $i++) {
        $books[] = [
            'name' => "Tên Sách $i",
            'content' => "Nội dung $i"
        ];
    }


    $total_books = count($books);
    $books_per_page = 10;
    $total_pages = ceil($total_books / $books_per_page);


    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    if ($current_page < 1) {
        $current_page = 1;
    } elseif ($current_page > $total_pages) {
        $current_page = $total_pages;
    }


    $start_index = ($current_page - 1) * $books_per_page;
    $end_index = min($start_index + $books_per_page - 1, $total_books - 1);
    ?>

    <table>
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Nội dung sách</th>
        </tr>

        <?php

        for ($i = $start_index; $i <= $end_index; $i++) {
            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>" . htmlspecialchars($books[$i]['name']) . "</td>";
            echo "<td>" . htmlspecialchars($books[$i]['content']) . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

    <div class="pagination">
        <?php

        if ($current_page > 1) {
            echo "<a href='?page=" . ($current_page - 1) . "'>&laquo; Lùi</a>";
        } else {
            echo "<a class='disabled'>&laquo; Lùi</a>";
        }


        for ($page = 1; $page <= $total_pages; $page++) {
            echo "<a href='?page=$page'" . ($page == $current_page ? " class='active'" : "") . ">$page</a>";
        }


        if ($current_page < $total_pages) {
            echo "<a href='?page=" . ($current_page + 1) . "'>Tiến &raquo;</a>";
        } else {
            echo "<a class='disabled'>Tiến &raquo;</a>";
        }
        ?>
    </div>

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
