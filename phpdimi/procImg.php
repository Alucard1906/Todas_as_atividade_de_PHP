<?php
//receber o arquivo da imagen 
$imagen = $_FILES["banana"];
$tmp = $imagen["tmp_name"];
$dir = "arq/". $imagen["name"];

if ($imagen["error"]== 0){
    if (move_uploaded_file($tmp,$dir)){
        echo "arquivo cadastrado com sucesso";
    }
}else{
    echo"erro de upload";
}
?>