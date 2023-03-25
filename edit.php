<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/connection.php") ?>
<div class="container">
        <h1 class="text-center">Додати категорію</h1>
        <form >
        

            
            <?php
            $idTMP = $_GET['id'];
                $sql = "SELECT * FROM categories WHERE id=$idTMP";
                $command = $dbh->query($sql);

                    foreach ($command as $item ) {
                        $id = $item['id'];
                        $name = $item['name'];
                        $image = $item['image'];
                        $description = $item['description'];
                        echo "
                            <div class='mb-3'>
                                <label for='name' class='form-label'>Назва</label>
                                <input type='text' class='form-control' id='name' name='name' value='$name'>
                            </div>
                            <div class='mb-3'>
                                <label for='image' class='form-label'>URL фото</label>
                                <input type='text' class='form-control' id='image' name='image'  value='$image'>
                            </div>
        
                            <div class='mb-3'>
                                <div class='form-floating'>
                                    <textarea class='form-control'
                                            name='description'
                                            placeholder='Leave a comment here'
                                            id='description'
                                            style='height: 100px' value='$description'></textarea>
                                    <label for='description'>Опис</label>
                                </div>
                            </div>
                            <button type='submit' class='btn btn-primary'>Редагувати</button>
                 
                        ";
                    }
                    
                
                ?>
        </form>
    </div>
</body>
</html>