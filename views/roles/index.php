<h1 class="text-center">ROLES</h1>
<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioRol">
        <input type="hidden" name="rol_id" id="rol_id">
        <div class="row mb-3">
                <div class="col">
                    <label for="rol_nombre">Nombre del Rol</label>
                    <input type="text" name="rol_nombre" id="rol_nombre" class="form-control">
                </div>
            </div>         
            <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioRol" id="btnGuardar" data-saludo= "hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
            </div>
            <div class="text-center mt-3">
                <a href="/examen_parcial_franco/menu" class="btn logout-btn">CANCELAR</a>
            </div>
        </div>
    </form>
</div>
<script src="<?= asset('./build/js/roles/index.js') ?>"></script>