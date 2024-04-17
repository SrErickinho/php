<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once("mysqli.php");
?> 
<h1>Mostrando a tabela BD </h1>
    <?php
   
        $sql = "select * from aluno";
        $resultado = mysqli_query($conn, $sql);
       
        while ($dados = mysqli_fetch_assoc($resultado)) {
            echo"".$dados["cod"]." ".$dados["nome"]." ".$dados["idade"]. "<br>";
        }
    ?>
   

</body>
</html>