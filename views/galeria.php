
    <title>Galeria</title>
  </head>
  <body>
  	<div class="container text-center">
  		
  	<?php 
       
    ?>
    <h1>Galeria de Usuarios...</h1>
    <p>Numero de Usuarios: <?php echo count($qt); ?></p>

    <br><hr>

    
    
    <?php  
      foreach ($qt as $usuarios) {
        echo '<div class="alert alert-dark " style="width: 160px;float:left;margin-right:20px;">
          <img src="assets/img/null.png" width="100" class="border" style="margin: 10px;">
          <p>'. utf8_encode($usuarios['nome']) .'</p>
          <small>Idade: '.$usuarios['idade'].'</small>

        </div>';
      }

    	for ($i=1; $i < 101; $i++) { 
    		
    	}
    ?> 


    </div>

