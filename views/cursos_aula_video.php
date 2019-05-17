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
	<h1>Vídeo - <?php echo $aula_info['nome']; ?></h1>
	<iframe id="video" style="width: 98%;" src="//player.vimeo.com/video/<?php echo $aula_info['url']; ?>"></iframe>
	<?php print_r($aula_info['descricao']) ; ?>
	<br><br>
	<button onclick="MarcarAssistido(this)" data-id="<?php echo $aula_info['id']; ?>">Marcar como Assistido &#10003;</button>
	<hr>
	<h3>Dúvidas? Envie sua pergunta!</h3>
	<form method="POST" class="form_duvida">
		<textarea name="duvida"></textarea>

		<input type="submit" value="Enviar Dúvida"/>
	</form>

	<br>
	<h3>Perguntas: </h3><br>
</div>