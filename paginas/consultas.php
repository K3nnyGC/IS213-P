<?php
$data=[
    [
        'fecha' => "25/02/1993",
        'motivo' => 'Hola XD',
        'asunto' => "Reportar algo perdido en .... para luego ser retornado en .... y demas cosas que debemos .... etc etc etc..."
        ],
    [
        'fecha' => "25/02/1993",
        'motivo' => 'Hola XD',
        'asunto' => "Reportar algo perdido en .... para luego ser retornado en .... y demas cosas que debemos .... etc etc etc..."
        ]
    ];

$data=$_SESSION['consultas'];
?>



<div class="tabla-datos">
    <p>CONSULTAS REALIZADAS</p>
    <div class="tabla-pagos">
        <ul class="nav nav-tabs">
            <li class="active"><a>CONSULTAS</a></li>
        </ul>
        <div class="tab-content">
            
            <div class="tab-pane fade in active">
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>ASUNTO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i< count($data);$i++){ ?>
                            <tr>
                                <td>
                                    <?php echo $data[$i]['fecha']; ?>
                                </td>
                                <td>
                                    <?php echo utf8_decode($data[$i]['motivo']); ?>
                                </td>
                            </tr>
                            <tr>
                                <td COLSPAN=2>
                                    <?php echo utf8_decode($data[$i]['asunto']); ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <p>NUEVA CONSULTA</p>
    <div class="tabla-pagos">
        <ul class="nav nav-tabs">
            <li class="active"><a>NUEVO</a></li>
        </ul>
        <div class="tab-content">
            
            <div class="tab-pane fade in active">
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>ASUNTO</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td>
                                    <input class="fecha-s" type="date"/>
                                </td>
                                <td>
                                    <input class="asunto-s" type="text"/>
                                </td>
                            </tr>
                            <tr>
                                <th COLSPAN=2>MENSAJE</th>
                            </tr>
                            <tr>
                                <td COLSPAN=2>
                                    <textarea  class="texto-s"></textarea>
                                </td>
                            </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    
</div>