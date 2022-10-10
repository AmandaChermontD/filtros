<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nome=$_GET["fname"];
$genero=$_GET["fgenero"];
$data=$_GET["fdata"];
$fone=$_GET["tel"];
$f=str_replace ("-","","$fone");//retira hifen e ponto para converter em inteiro
intval($f);//converte em inteiro para validar
$email=$_GET["femail"];




// remove caracteres dos inputs - sanitizar -
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$nome = filter_var($nome, FILTER_SANITIZE_STRING);
$data = filter_var($data, FILTER_SANITIZE_STRING);
$f = filter_var($f, FILTER_SANITIZE_NUMBER_INT);
$genero = filter_var($email, FILTER_SANITIZE_STRING);


// Valida o email
if (!filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_VALIDATE_URL) === false) {
  echo("$email email valido<br>");
} else {
  echo("$email email invalido<br>");
}
//validar o nome para saber se não colocaram uma url
if (!filter_var($nome, FILTER_VALIDATE_URL) ) {
    echo("$nome não é url<br>");
  } else {
    echo("$nome é uma url, não é permitido<br>");
  }
  // Validar o telefone, se é um inteiro
 if (filter_var($f, FILTER_VALIDATE_INT)){
    echo("$f telefone valido<br>");
} else {
  echo("$f telefone invalido<br>");
}
//echo substr($f,0,2)."-". substr($f,2,5)."-". substr($f,7,4);//converter o telefone em string e colocar o "-" e "."
?>
</body>

</html>