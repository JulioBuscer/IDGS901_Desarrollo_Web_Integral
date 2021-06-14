<?php
function imprimir()
{
}
?>

<form method="GET" action="">
    <div class="row">
        <div class="col-md-12">
            <h3>Formulario</h3>
        </div>
        <div class="col-md-3">
            <input id="nombre" name="nombre" type="text" class="form-control">
        </div>
        <input type="hidden" name="numPeticiones" value="<?= $numPeticiones ?>">
        <label for="numPeticiones">Peticiones: <?= $numPeticiones ?></label>
        <div class="col-md-12">
            <button class="btn btn-success">Enviar</button>
        </div>
    </div>

</form>