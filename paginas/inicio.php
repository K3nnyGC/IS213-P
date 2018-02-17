<?php
// $data=[
//     [
//         'titulo' => "Verano 2018",
//         'imagen' => 'https://img.imagenescool.com/ic/th/200x200/verano/verano_014.jpg',
//         'contenido' => "Matriculate en las clases de verano para el 2018 ocupa tu tiempo libre adelantando cursos o nivelando alguna materia problematica."
//         ],
//     [
//         'titulo' => "Verano 2018",
//         'imagen' => 'https://img.imagenescool.com/ic/th/200x200/verano/verano_014.jpg',
//         'contenido' => "Matriculate en las clases de verano para el 2018 ocupa tu tiempo libre adelantando cursos o nivelando alguna materia problematica."
//         ],
//     [
//         'titulo' => "Verano 2018",
//         'imagen' => 'https://img.imagenescool.com/ic/th/200x200/verano/verano_014.jpg',
//         'contenido' => "Matriculate en las clases de verano para el 2018 ocupa tu tiempo libre adelantando cursos o nivelando alguna materia problematica."
//         ]

// ]
$data=$_SESSION['noticias'];
?>

<div class="tabla-datos">
    <p>NOTICIAS</p>
    <div class="tabla-noticias">

        <div class="tab-content">
            
            <div class="tab-pane fade in active">
                <?php for($i=0;$i< count($data);$i++){ ?>
                <div class="noticias">
                <table>
                    <tr>
                        <td class="noti-izq">
                            <div><img  class="noticias-img" src="<?php echo $data[$i]['imagen']; ?>" /></div>
                        </td>
                        <td class="noti-der">
                            <p class="noticias-titulo"><?php echo $data[$i]['titulo']; ?></p>
                            <p class="noticias-contenido"><?php echo $data[$i]['contenido']; ?></p>
                            
                        </td>
                    </tr>
                </table>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>