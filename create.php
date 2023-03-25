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
    <div class="container">
        <h1 class="text-center">Додати категорію</h1>
        <form action="add.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Назва</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">URL фото</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>

            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control"
                              name="description"
                              placeholder="Leave a comment here"
                              id="description"
                              style="height: 100px"></textarea>
                    <label for="description">Опис</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Додати</button>
        </form>
    </div>
</main>
</body>
</html>