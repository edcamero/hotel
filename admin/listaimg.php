

<br>

<div class="table ">
<table class=" table table-hover table-bordered table-striped table-condensed" >
       
<thead> <tr class="text-center">
    
        <td scope="col">Id</td>
        <td scope="col">Tipo Habitacion</td>
        <td scope="col">Precio</td>
        <td scope="col">Acciones</td>
        
        </tr>
</thead>

    <?php 
    $lista=Imagen::buscarId($_GET['id']);


    foreach ($lista as &$tipo) {
        echo $tipo->id;
        echo "<tr>";
        
        
        echo "<td>$tipo->id</td>";
        echo "<td>$tipo->nombre </td>";
        echo "<td>$tipo->descripcion </td>";
        echo "<td>$tipo->ruta </td>";
        ?>
        
        <td class="text-center">
        <div class='btn-group'>
        
        <button id="see-language" name="see-language"type="button" class="btn btn-primary"
                    data-toggle="modal" 
                    data-target="#myModal">
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
    
    ?>
    


</table>
</div>

