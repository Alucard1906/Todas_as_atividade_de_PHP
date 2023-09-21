<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="proc.php" method="get">
    <div>
         <label for="nome">Nome :</label>
         <br>
         <input type="text" name="nome" 
         id="nome"/>
    </div>
    <div>
         <label for="CPF">CPF :</label>
         <br>
         <input type="text" name="cpf" 
         id="cpf"/>
    </div>

    <div>
         <label for="RG">RG :</label>
         <br>
         <input type="text" name="RG" 
         id="RG"/>
    </div>



    <div>
        <input type="submit" value="Enviar"/>
    </div>
  </form> 


</body>
</html>