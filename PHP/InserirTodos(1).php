<!DOCTYPE html >
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário </title >
</head>
<body>
<?php 
  echo "<h1> Dados Recebidos </h1><br>"; 
  echo $_GET['nome'];
  echo "<br>";
  echo $_GET['sobrenome'];
  echo "<br>";
  echo $_GET['pais'];
  echo "<br>";
  echo $_GET['sexo'];
  echo "<br>";
  echo $_GET['fav_lang'];
  echo "<br>";
  $ondeestuda = $_GET['onde_estuda'];
  print_r($ondeestuda);
   echo "<br>";
   foreach($ondeestuda as $escola){
	   echo "<br/>".$escola;
   }
   echo "<br>";
?>

</body>
 
