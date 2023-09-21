<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // pegar os arquivos na pasta 

    $pasta = "arq/";

    $arq = glob("$pasta{*.jpg,*.png,*.gif,*.jpeg}", GLOB_BRACE);
    
    //print_r($arq);
    //for; wile; do wile forech
    foreach ($arq as $pos) {

        echo "<img src='" . $pos . "'>";
    }
    ?>
</body>
</html>