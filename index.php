<?php 
include 'partials/header.php';
?>
    <div class="container">
         <h1>Busca tu pueblo</h1>
         <p class="alert alert-primary">
            Escribe un pueblo de España y te decimos su provincia y la CCAA a la que te pertenece
         </p>
    <form class='form' action='mostrar.php' method='get'>
        <div class='mb-2'>
        <input class='form-control' placeholder='&#128270;' type="search" name="pueblo" id="pueblo">
        </div>
       
       <button  class='btn btn-primary'type="submit"> Buscar </button>
    </form>

    </div>

<?php 
include 'partials/footer.php';
?>
