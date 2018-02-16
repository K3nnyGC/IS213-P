<div id="payment" class="payment">
    <div>
        <p>PAGAR</p>
    </div>
    <div id="cerrar" class="cerrar"><i class="fa fa-times" aria-hidden="true"></i></div>
    <form name="pago" action="ws/clientePagos.php"  METHOD='POST'>
        <i class="fa fa-cc-visa" aria-hidden="true"></i> <input type="text" NAME="tarjeta" placeholder="Numero de tarjeta VISA" />
        <div id="msg-ncard"><br></div>
        <!--<i class="fa fa-hashtag" aria-hidden="true"></i> <input type="text" NAME="pin" placeholder="PIN" />
        <div id="msg-pin"><br></div>-->
        <i class="fa fa-database" aria-hidden="true"></i> <input type="text" NAME="monto" readonly/>
    </form>
    <div id="btn-enviar-pago">Enviar</div>
</div>