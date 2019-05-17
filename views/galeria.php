
    <title>Galeria</title>
  </head>
  <body>
  	<div class="container text-center">
  		
  	<?php 
       
    ?>
    <h1>Galeria de Usuarios...</h1>
    <p>Numero de Usuarios: <?php echo count($qt); ?></p>

    <br><hr>

    <div class="row">
      
  
    <?php  
      foreach ($qt as $usuarios) {
        echo '
         <div class="card m-1" style="width: 13rem;">
            <div class="card-header">
                <img class="card-img-top" src="assets/img/null.png">
            </div>
              <h5 class="card-header ">'. utf8_encode($usuarios['nome']) .'</h5>
            <div class="card-body text-left">
                <div class="car-text">E-mail:  '.utf8_encode($usuarios['email']).'</div>
                <div class="car-text">Idade: '.$usuarios['idade'].'</div>
                
            </div>
            <a href="#" class="btn btn-link">Perfil</a>
        </div>';
      }


    ?> 
  </div>
    



    </div>

<!--  <div class="alert alert-dark float-left mr-2" style="width: 18rem;">
          <img src="assets/img/null.png" width="100" class="border" style="margin: 10px;">
          <p>'. utf8_encode($usuarios['nome']) .'</p>
          <small>Email: '.utf8_encode($usuarios['email']).'</small><br>
          <small>Idade: '.$usuarios['idade'].'</small>

        </div> -->