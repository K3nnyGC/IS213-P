<?php
$data=[
    [ 'nombre' => 'Alumno 1',
      'dias' => [
                [1,1,1,1,0,0,0,0,2,2,2,0,0],
                [1,1,1,1,0,0,0,0,2,2,2,0,0],
                [1,1,1,1,0,0,0,0,2,2,2,0,0],
                [1,1,1,1,0,0,0,0,2,2,2,0,0],
                [1,1,1,1,0,0,0,0,2,2,2,0,0],
                [1,1,1,1,0,0,0,0,2,2,2,0,0],
                [1,1,1,1,0,0,0,0,2,2,2,0,0]
            ]
        ],
    [ 'nombre' => 'Alumno 2',
      'dias' => [
                [1,1,1,1,0,0,0,0,2,2,2,0,0],
                [1,1,1,1,0,0,0,0,2,2,2,0,0],
                [1,1,1,1,0,3,3,0,2,2,2,0,0],
                [1,1,1,1,0,0,0,0,2,2,2,0,0],
                [1,1,1,1,0,0,0,0,2,2,2,0,0],
                [1,1,1,1,0,0,0,0,2,2,2,0,0],
                [1,1,1,1,0,0,0,0,2,2,2,0,0]
            ]
        ]
    ];

$data=$_SESSION['horario'];

$cursos=[
    "-",
    "Matematica",
    "Fisica",
    "Comunicacion"
    ];

?>



<div class="tabla-datos">
    <p>HORARIO</p>
    <div class="tabla-horarios">
        <ul class="nav nav-tabs">
            <?php for($i=0;$i< count($data);$i++){ ?>
            <li <?php echo $i == 0 ? 'class="active"' : ""; ?>><a data-toggle="tab" href="#a<?php echo $i;?>"><?php echo $data[$i]['nombre']; ?></a></li>
            <?php } ?>
        </ul>
        <div class="tab-content">
            <?php for($i=0;$i< count($data);$i++){ ?>
            <div id="a<?php echo $i;?>" class="tab-pane fade <?php echo $i == 0 ? "in active" : ""; ?> table-responsive">
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>L</th>
                            <th>M</th>
                            <th>X</th>
                            <th>J</th>
                            <th>V</th>
                            <th>S</th>
                            <th>D</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($j=0;$j< 13;$j++){ ?>
                            <tr>
                                <td><?php echo "". ($j+8) . "-" . ($j+9);?></td>
                                <td><div class="dia"><?php echo $data[$i]['dias'][0][$j]; ?></div></td>
                                <td><div class="dia"><?php echo $data[$i]['dias'][1][$j]; ?></div></td>
                                <td><div class="dia"><?php echo $data[$i]['dias'][2][$j]; ?></div></td>
                                <td><div class="dia"><?php echo $data[$i]['dias'][3][$j]; ?></div></td>
                                <td><div class="dia"><?php echo $data[$i]['dias'][4][$j]; ?></div></td>
                                <td><div class="dia"><?php echo $data[$i]['dias'][5][$j]; ?></div></td>
                                <td><div class="dia"><?php echo $data[$i]['dias'][6][$j]; ?></div></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            
            </div>
            <?php } ?>
        </div>
    </div>
</div>