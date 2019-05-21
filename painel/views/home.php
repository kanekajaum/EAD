<h1>Seus Cursos</h1>

<?php foreach($cursos as $curso): ?>

<a href="<?php echo BASE; ?>cursos/entrar/<?php echo $curso['id_curso']; ?>">
	<div class="cursoitem">
		<img src="<?php echo BASE;?>assets/images/img_cursos/<?php echo $curso['imagem'] ;?>" border="0" width="100%" height="250px"; /><br><br>
		<strong><?php echo $curso['nome']; ?></strong><br><br>
		<?php echo $curso['descricao']; ?> 
	</div>
</a>

<?php endforeach; ?>