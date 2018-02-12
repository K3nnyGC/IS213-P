<?php
$data=[
    [
        'id' => 1,
        'nombre' => 'Alumno 1',
        'notas' => [
            ['id' => 'MA1','nombre' => 'Matematica','nota' => 16,'obs' => '-'],
            ['id' => 'CO3','nombre' => 'Comuncacion','nota' => 18,'obs' => '-'],
            ['id' => 'FI2','nombre' => 'Fisica II','nota' => 12,'obs' => '-']
                ]
        ],
    [
        'id' => 2,
        'nombre' => 'Alumno 2',
        'notas' => [
            ['id' => 'MA1','nombre' => 'Matematica','nota' => 14,'obs' => '-'],
            ['id' => 'CO3','nombre' => 'Comuncacion','nota' => 14,'obs' => '-'],
            ['id' => 'FI2','nombre' => 'Fisica II','nota' => 20,'obs' => '-']
                ]
        ]
];

$data=$_SESSION['notas'];
?>



<div class="tabla-datos">
    <p>NOTAS</p>
    <div class="tabla-notas">
        <ul class="nav nav-tabs">
            <?php
            echo count($data)==0 ? "<li class='active'>No tiene alumnos relacionados</li>" : "";
            for($i=0;$i< count($data);$i++){ ?>
            <li <?php echo $i == 0 ? 'class="active"' : ""; ?>><a data-toggle="tab" href="#a<?php echo $i;?>"><?php echo $data[$i]['nombre']; ?></a></li>
            <?php } ?>
        </ul>
        <div class="tab-content">
            <?php for($i=0;$i< count($data);$i++){ ?>
            <div id="a<?php echo $i;?>" class="tab-pane fade <?php echo $i == 0 ? "in active" : ""; ?>">
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>CURSO</th>
                            <th>NOTA</th>
                            <th>OBSERVACION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($j=0;$j< count($data[$i])-1;$j++){ ?>
                            <tr>
                                <td>
                                    <?php echo $data[$i][$j]['curso']; ?>
                                </td>
                                <td>
                                    <?php echo $data[$i][$j]['nota']; ?>
                                </td>
                                <td>
                                    --
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            
            </div>
            <?php } ?>
        </div>
    </div>
</div>