<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" type="text/css" href="<?php echo BASE;?>assets/css/template.css">
    <!-- Bootstrap CSS -->

    <title>EAD</title>
  </head>
  <body>

    <?php if (isset($_SESSION['lgaluno'])): ?>
    <div class="top">
      
      <div class="topoLeft">
        <div class="divLine">
        
        <a href="<?php echo BASE; ?>" class="">Home</a> 
        <script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>

        </div>
      </div>

      <div class="toporight">

        <?php if (isset($_SESSION['lgaluno'])): ?>
         
          <div class="divLine" >
             <a href="<?php echo BASE."login/logout"; ?>">Sair</a>
          </div>
        <?php endif ?>
      </div>
      <div  class="divLine"><?php echo"Bem vindo ".$viewData['info']->getNome(); ?></div>

    </div>
    <?php endif ?>

      <?php
        $this->loadViewInTemplate($viewName, $viewData);
      ?>  
 
  </body>
</html>