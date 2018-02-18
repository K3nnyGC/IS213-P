<?php
// $data=[
//     [
//         'id' => 1023,
//         'concepto' => 'Pension Febrero',
//         'monto' => 1250,
//         'fecha' => "28/01/2018"
//         ],
//     [
//         'id' => 1050,
//         'concepto' => 'Pension Enero',
//         'monto' => 1250,
//         'fecha' => "28/12/2017"
//         ],
//     [
//         'id' => 1128,
//         'concepto' => 'Pension Diciembre',
//         'monto' => 1250,
//         'fecha' => "28/11/2017"
//         ],

// ];

$data=$_SESSION['deudas'];
?>

<div class="tabla-datos">
    <p>HISTORIA DE PAGOS</p>
    <div class="tabla-pagos">
        <ul class="nav nav-tabs">
            <li class="active"><a>PAGOS</a></li>
        </ul>
        <div class="tab-content">
            
            <div class="tab-pane fade in active">
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#Pago</th>
                            <th>CONCEPTO</th>
                            <th>MONTO</th>
                            <th>ESTADO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i< count($data);$i++){ ?>
                            <?php if ($data[$i]['pagado']==true){ ?>
                            <tr>
                                <td>
                                    <?php echo "MS0".$data[$i]['idDeuda']; ?>
                                </td>
                                <td>
                                    <?php echo $data[$i]['concepto']; ?>
                                </td>
                                <td>
                                    <?php echo $data[$i]['monto']; ?>
                                </td>
                                <td>
                                    <?php echo "CANCELADO"; ?>
                                </td>
                            </tr>
                        <?php 
                                }
                            } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
