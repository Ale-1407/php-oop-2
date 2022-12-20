<?php 

include_once __DIR__ . './classi/category.php';
include_once __DIR__ . './classi/accessori.php';
include_once __DIR__ . './classi/cibo.php';
include_once __DIR__ . './classi/giocattoli.php';

$categorie = [
    'cane' => new Categoria('cane', '<i class="fa-solid fa-dog"></i>'),
    'gatto' => new Categoria('gatto', '<i class="fa-solid fa-cat"></i>'),
    'uccello' => new Categoria('uccello', '<i class="fa-solid fa-crow"></i>')
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>