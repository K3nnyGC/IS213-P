    <div id="home-formulario" class="signup">
        <div id="cerrar" class="cerrar"><i class="fa fa-times" aria-hidden="true"></i></div>
        <form name="formulario" action="ws/cliente.php"  METHOD='POST'>
            <!--<p>Nombre:</p>-->
            <input type="text" NAME="nombre" placeholder="Nombre" />
            <div id="msg-name"><br></div>
            <!--<p>Correo:</p>-->
            <input type="mail" NAME="correo" placeholder="Correo" />
            <div id="msg-mail"><br></div>
            <input type="password" NAME="password" placeholder="Password" />
            <div id="msg-password"><br></div>
            <input type="password" NAME="password2" placeholder="Repita el password" />
            <div id="msg-password2"><br></div>
        </form>
        <div id="btn-enviar">Enviar</div>
    </div>