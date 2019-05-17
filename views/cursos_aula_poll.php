<div class="cursoinfo">
	<img src="<?php echo BASE; ?>assets/images/img_cursos/<?php echo $curso->getImagem(); ?>" border="0" height="60"/>

	<h3><?php echo $curso->getNome(); ?></h3>
	<?php echo $curso->getDescricao(); ?>
</div>
<div class="curso_left"> 
	<?php foreach ($modulos as $modulo): ?>
		<div class="modulo"><?php
		 echo utf8_encode($modulo['nome']); ?></div>
		 <?php foreach ($modulo['aulas'] as $aula): ?>
		 	<a href="<?php echo BASE; ?>cursos/aula/<?php echo $aula['id']; ?>"><div class="aula"><?php echo $aula['nome']; ?></div></a>
		 <?php endforeach ?>
	<?php endforeach; ?>
</div>
<div class="curso_right">
	<h1>Questionario</h1>

<fieldset>
	
	<h3><?php echo $aula_info['pergunta']; ?></h3>
	
<form method="POST">
	<input type="radio" name="opcao" value="1" id="opcao1" />
	<label for="opcao1"><?php echo $aula_info['opcao1']; ?></label><br><br>

		<input type="radio" name="opcao" value="2" id="opcao2" />
	<label for="opcao2"><?php echo $aula_info['opcao2']; ?></label><br><br>

		<input type="radio" name="opcao" value="3" id="opcao3" />
	<label for="opcao3"><?php echo $aula_info['opcao3']; ?></label><br><br>

		<input type="radio" name="opcao" value="4" id="opcao1" />
	<label for="opcao4"><?php echo $aula_info['opcao4']; ?></label><br><br>


	<input type="submit" value="Enviar Resposta">

</form><br><br>
	<?php 
		if(isset($resposta)){
			if ($resposta === true) {

			?>
			<div class="resposta_certa">
			<?php

				echo "RESPOSTA CORRETA!!!";
			?>
			</div>
			<?php

			}else{

			?>
			<div class="resposta_errada">
			<?php

				echo "RESPOSTA INCORRETA!!!";
			?>
			</div>
			<?php

			}
		} 
			?>
</fieldset>
</div>