<!DOCTYPE html>
<html>
  <head>
    <title>ILarica - Fast Food</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>	
		<header class="cabecalho">		
		<a href="index.php"><img src="img/logo.png" class="logo"></a>
		<a class="btn-menu"><i class="fa fa-bars fa-lg"></i></a>
		<nav class="menu">
			<a href="" class="btn-close">x</a>
			<ul>					
			<li><a href="index.php">Inicio</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="#">Listar Lanches</a></li>
			<li><a href="#">Listar Usuários</a></li>
			<li><a href="#">Listar Clientes</a></li>			
		</ul>
	</header>
<script src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  	$(".btn-menu").click(function() {
  		$(".menu").show();
  	});
  	$(".btn-close").click(function() {
  		$(".menu").hide();
  	});
  </script>