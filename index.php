<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Головна сторінка</title>

</head>
<body>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/_header.php"); ?>
<h1>Привіт козаки</h1>
<?php echo "<h2>Привіт я PHP :)</h2>" ?>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/connection.php") ?>
<script src="/js/bootstrap.bundle.min.js"></script>
<main>
    <div class="container"><h1 class="text-center">Список категорій</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Фото</th>
                <th scope="col">Навва</th>
                <th scope="col">Опис</th>
                <th scope="col">Дії</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                $sql = "SELECT * FROM categories";
                $command = $dbh->query($sql);

                foreach ($command as $item) {
                    $id = $item['id'];
                    $name = $item['name'];
                    $image = $item['image'];
                    $desc = $item['description'];
                    echo "
                    <tr>
                        <td><img src='$image' height='60'></td>
                        <td>$name</td>
                        <td>$desc</td>
                        <td>
                            <div style='display: flex; justify-content: center; '>
                                <a href='delete.php?nomer=$id' style='margin-right: 10px'>
                                    <img src='images/delete.png' height='26'/>
                                </a>
                                <a >
                                    <img src='images/edit.png' height='26'/>
                                </a>
                            </div>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tr>

            </tbody>
        </table>
    </div>
</main>
</body>
</html>