<?php
    $path_ru = './config/config_ru.php';
    $path_eng = './config/config_eng.php';
    $path = $path_eng;
    if(isset($_GET['lang'])){
         $path = $_GET['lang'] == 'ru' ?  $path_ru : $path_eng;
    }
    require $path;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="Author" content="Дылевский Юрий Игоревич"> 
    <meta name="Copyright" content="Дылевский Юрий Игоревич">
    <meta name="Address" content="stranger354999@gmail.com">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Portfolio main page</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <div class="wrapper">
    <?php
        include './includes/header.php';
        include './includes/info.php';
        include './includes/content.php';
        include './includes/catalog.php';
        include './includes/contact.php';
        include './includes/footer.php';
        include './includes/anchor.php';
    ?>
    </div>
    
    <script src="./js/build.min.js"></script> 
</body>
</html>