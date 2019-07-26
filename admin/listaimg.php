

<br>

<div class="table ">
<table class=" table table-hover table-bordered table-striped table-condensed" >
       
<thead> <tr class="text-center">
    
        <!--<td scope="col">Id</td>-->
        <td scope="col">NOMBRE</td>
        <td scope="col">DESCRIPCION</td>
        <td scope="col">imagen</td>
        
        </tr>
</thead>

    <?php 
    $tipoh=Tipo_habitacion::buscarId($_GET['id']);
       
        
    if (!empty($tipoh->imagenes)) {
        
    foreach ($tipoh->imagenes as &$tipo) {
       // echo $tipo->id;
        echo "<tr>";
        
        
       // echo "<td>$tipo->id</td>";
        echo "<td>$tipo->nombre </td>";
        echo "<td>$tipo->descripcion </td>";
        echo "<td> <img class='rounded img-fluid' src=$tipo->ruta alt=´´></td>";
        ?>
        
        <td class="text-center">
        <div class='btn-group'>
        
        <button id="see-language" name="see-language"type="button" class="btn btn-primary">             >
                    Ver
        </button>
        <button id="see-language" name="see-language"type="button" class="btn btn-success"
                    >
                    editar
        </button>
        
        <button id="see-language" name="see-language"type="button" class="btn btn-danger"
                    data-toggle="modal" 
                    data-target="#myModal">
                    eliminar
        </button>
        <?php		echo "</div></td>";
        echo "</tr>";
        
    }
}
    ?>
    


</table>
</div>

