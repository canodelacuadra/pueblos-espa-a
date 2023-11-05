<?php
    // recojo en una variable el valor de input
 if(isset($_GET['pueblo'])&&$_GET['pueblo']!=''):
    $pueblo = $_GET['pueblo'];
    
    // incluimos conexion
    include 'conexion.php'; 
    // creamos sentencia que coge la variable $pueblo
    $sql="select municipios.Municipio,
     provincias.provincia, 
     ccaa.nombre 
     from municipios
      join provincias 
      on municipios.idProvincia = provincias.idProvincia
       JOIN ccaa 
       ON ccaa.idCCAA = provincias.idCCAA 
       where municipios.Municipio like '%$pueblo%'
       ";
    //var_dump($sql);

    // hacemos la consulta con mysqli
    $resultado = mysqli_query($conexion,$sql);
    //var_dump($resultado);
    // evaluamos que al menos 1 resultado
    if(mysqli_num_rows($resultado)>0){
        // informamos del número de resultados
        if(mysqli_num_rows($resultado)>1){
        echo "<div class='alert alert-info' role='alert'>
        Hemos encontrado <span class='display-4'> ".mysqli_num_rows($resultado)."resultados</span> 
        </div>";
        }else{
            echo "
            <div class='alert alert-info' role='alert'>
            Hemos encontrado ".mysqli_num_rows($resultado)." resultado: 
            </div>"; 
        }
        echo '<table class="table table-striped">';
         // recorremos la consulta
        while($row = mysqli_fetch_assoc($resultado)):
        // mostramos la consulta
    
        echo "<tr>
            <td>".$row['Municipio'] ."</td> 
            <td>". $row["provincia"]. "</td>
            <td>". $row["nombre"]. "</td>
        </tr>";

         endwhile;
        echo '</table>';
    }else{
        echo "<p>No hemos encontrado nada con $pueblo </p>";
        echo "<p>Prueba otra consulta</p>";
    }

    // cerramos conexion
    mysqli_close($conexion);
endif;
?>