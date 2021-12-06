<?php
if (!isset($_SESSION)) {
  session_start();
}

//Abrindo seções
$_SESSION['id'] = "1";
$_SESSION['nome'] = "Jorge Neto";
$_SESSION['carga_horaria'] = "8";

if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $nome = $_SESSION['nome'];
  $carga_horaria = $_SESSION['carga_horaria'];
}
