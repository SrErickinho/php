<?php 
  $host="localhost";
  $bd="banco";
  $usuario="aluno";
  $senha="ceep";

  $conn=mysqli_connect($host,$usuario,$senha,$bd);

  if ($conn ->connect_errno){
    echo"Falha ao conectar (",$mysqli ->connect_errno, $mysqli->connect_errno;
  }else{
    echo "Conectado ao banco de dados, acessando a base $bd";
  } 
  
 ?>