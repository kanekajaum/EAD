
    <title>home</title>
  </head>
  <body>

  	<div class="container">
  		<?php print_r($nome) ?>
	<h1>Bem vindo <?php echo utf8_encode($usuario['nome']) ?>, você tem <?php echo $usuario['idade'] ?>?</h1>
	<h3> Você tem <?php  echo $quant; ?> anuncios</h3>

	<br>
	<a href="galeria" class="btn btn-dark">Galeria</a>

  	</div>

