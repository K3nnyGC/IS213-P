<div class="tabla-datos">
    <form name="datos" action="ws/clienteEditar.php" METHOD='POST'>
    <p>PERFIL</p>
    <div>Nombre</div><input class="nulo" name="nombre" type="text" value="<?php echo $_SESSION['usuario']['no_user']; ?>" readonly/>
    <p id="td-nombre" class="tabla-datos-error"><br></p>
    <div>Correo</div><input name="correo" type="text" value="<?php echo $_SESSION['usuario']['tx_email']; ?>" />
    <p id="td-correo" class="tabla-datos-error"><br></p>
    <div>DNI</div><input class="nulo" type="text"  value="<?php echo $_SESSION['usuario']['co_dni']; ?>" readonly/>
    <p id="td-dni" class="tabla-datos-error"><br></p>
    <div>Telefono</div><input name="telefono" type="text" value="<?php echo $_SESSION['usuario']['tx_telefono'] == null ? "":$_SESSION['usuario']['tx_telefono']; ?>"/>
    <p id="td-telefono" class="tabla-datos-error"><br></p>
    <div>Direccion</div><input name="direccion" type="text" value="<?php echo $_SESSION['usuario']['tx_direccion'] == null ? "":$_SESSION['usuario']['tx_direccion']; ?>" />
    <p id="td-direccion" class="tabla-datos-error"><br></p>
    <div id="boton-datos">Enviar</div>
    </form>
</div>

<?php
    
?>