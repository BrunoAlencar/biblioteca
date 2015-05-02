<link href="../../css/bootstrap.min.css" rel="stylesheet">
<?php 
include '../../template/menu.php';
include '../../control/UsuarioController.php';
$usuarioController = new UsuarioController();

if(isset($_POST['salvar'])){
	$usuarioController->insertControl();
	
	

}

?>
<div class="col-md-6 col-md-offset-3" align="center">
<form action="" method="POST">
	<label for="usuario">Usuario</label>
	<input type="text" class="form-control" id="usuario" name="descricao">
	<label for="email">Email</label>
	<input type="email" class="form-control" id="email" name="email">
	<label for="senha">senha</label>
	<input type="password" class="form-control" id="senha" name="senha">
	<div class="col-md-4" style="margin-left: -15px">
	<label for="status"> Status</label>
	<select  id="status" name="status" class="form-control " >
		<option value="ATIVO">ATIVO</option>
		<option value="DESATIVADO">INATIVO</option>

	</select>
	<label for="tipo_id">Tipo Usuario:</label>
	<select class="form-control" name="tipo_id" id="tipo_id">
		<option value="1">Administrador</option>
		<option value="2">Usuario Comum</option>
		<option value="3">Vendedor</option>
	</select>
	
	</div> <br><br>
	<input type="submit" class="btn btn-success btn-sm btn-block" name="salvar" value="Cadastrar"/>
	<input type="reset" class="btn btn-danger btn-sm btn-block" value="Limpar"/>
</form>
</div>

<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>