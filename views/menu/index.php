<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= asset('./build/css/styles.css') ?>"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Menú Principal</title>
</head>
<body>
  <div class="container">
    <div class="menu-container">
      <h1 class="menu-title">MENU PRINCIPAL</h1>
      <!-- <a href="/examen_parcial_franco/productos/datatable" class="btn btn-link menu-link">DATATABLE PRODUCTOS</a>
      <a href="/examen_parcial_franco/productos/estadistica" class="btn btn-link menu-link">ESTADISTICA PRODUCTOS</a> -->
      <a href="/examen_parcial_franco/roles" class="btn btn-link menu-link">CREAR UN NUEVO ROL</a>
      <a href="/examen_parcial_franco/permisos" class="btn btn-link menu-link">LISTADO Y ADMINISTRACION DE USUARIOS</a>

      <a href="/examen_parcial_franco/estadistica1" class="btn btn-link menu-link">ESTADISTICA PERSONAS ROLES</a>
      <a href="/examen_parcial_franco/estadistica2" class="btn btn-link menu-link">ESTADISTICA ACTIVOS E INACTIVOS</a>
    </div>
    <div class="text-center mt-3">
      <a href="/examen_parcial_franco/logout" class="btn logout-btn">Cerrar sesión</a>
    </div>
  </div>
</body>
</html>
