<div id="payment" class="payment">
    <div>
        <p>PAGAR</p>
    </div>
    <div id="cerrar" class="cerrar"><i class="fa fa-times" aria-hidden="true"></i></div>
    <form name="pago" action="ws/clientePagos.php"  METHOD='POST'>
        <i class="fa fa-cc-visa pay-izq" aria-hidden="true"></i> <input class="pay-der" type="text" NAME="tarjeta" placeholder="Numero de tarjeta VISA" />
        <div id="msg-ncard"><br></div>
        <!--<i class="fa fa-hashtag" aria-hidden="true"></i> <input type="text" NAME="pin" placeholder="PIN" />
        <div id="msg-pin"><br></div>-->
        <i class="fa fa-database pay-izq" aria-hidden="true"></i> <input class="pay-der" type="text" NAME="monto" readonly/><br>
        <div><br></div>
        <i class="fa fa-hashtag pay-izq" aria-hidden="true"></i> <input class="pay-der" type="text" NAME="iddeuda" readonly/>
    </form>
    <div id="btn-enviar-pago">Enviar</div>
</div>