<link href="../../css/bootstrap.min.css" rel="stylesheet">
<?php
include '../../control/UsuarioController.php';
include '../../template/menu.php';
$usuarioController = new UsuarioController();

/* foreach ($usuarioController->findAll() as $usuario) {
  echo $usuario->descricao;
  echo $usuario->email;
  echo $usuario->status;
  } */
?>
<div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
    <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading ">Head</div>
        <div class="panel-body">

            <button type="button" class="btn btn-primary btn-sm col-md-offset-10" >
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
                <a href="adicionar.php" style="text-decoration: none;color:white">Adicionar</a>
            </button>
            <br><br>
            <table class="table table-striped table-hover">
                <tr>
                    <th>Id</th>  
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                </tr> 
                <?php foreach ($usuarioController->findAll() as $usuario) {
                    ?>
                    <tr>
                        <td><?php echo $usuario->id; ?></td>
                        <td><?php echo $usuario->descricao; ?></td>
                        <td><?php echo $usuario->email; ?></td>
                        <td><?php
                if ($usuario->status == "ATIVO") {
                    echo "<p><span class='label label-success'>" . $usuario->status . "</span></p>";
                } else {
                    echo "<p><span class='label label-danger'>" . $usuario->status . "</span></p>";
                }
                    ?>  </td>
                        <td><?php echo $usuario->tipo_descricao; ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Edit/Delete
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                </ul>
                            </div>

                        </td>
                        
                    </tr>
                <?php } ?>       

            </table>
        </div>
    </div>
</div>
<?php
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>