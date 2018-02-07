<?php
$data=[
    [
        'id' => 1023,
        'concepto' => 'Pension Febrero',
        'monto' => 1250,
        'fecha' => "28/01/2018"
        ],
    [
        'id' => 1050,
        'concepto' => 'Pension Enero',
        'monto' => 1250,
        'fecha' => "28/12/2017"
        ],
    [
        'id' => 1128,
        'concepto' => 'Pension Diciembre',
        'monto' => 15000,
        'fecha' => "28/11/2017"
        ],

]
?>

<div class="tabla-datos">
    <p>DEUDAS</p>
    <div class="tabla-deudas">

        <div class="tab-content">
            
            <div class="tab-pane fade in active">
                <?php for($i=0;$i< count($data);$i++){ ?>
                <div class="tabla-deudas-deuda">
                    <div id="con<?php echo $i;?>" class="concepto"><i class="fa fa-check-square" aria-hidden="true"></i> <?php echo $data[$i]['concepto']; ?></div>
                    <div id="fec<?php echo $i;?>" class="fecha"><i class="fa fa-calendar" aria-hidden="true"></i> Emitido: <?php echo $data[$i]['fecha']; ?></div>
                    <div id="mon<?php echo $i;?>" class="monto"><i class="fa fa-database" aria-hidden="true"></i> Total a pagar <?php echo $data[$i]['monto']; ?> Nuevos Soles</div>
                    <div id="bot<?php echo $i;?>" class="boton-pago"><i class="fa fa-cc-visa" aria-hidden="true"></i> PAGAR</div>
                    <script>
                        $( "#con<?php echo $i;?>" ).data( "monto", <?php echo $data[$i]['monto']; ?> );
                        $( "#bot<?php echo $i;?>" ).click(function() {
                            document.pago.monto.value =  $( "#con<?php echo $i?>" ).data("monto");
                            $("#sombra").show();
                            $("#payment").slideToggle("low");
                        });
                    </script>                
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div id="sombra" class="home-1"></div>
<?php include_once("partes/payment.php"); ?>
