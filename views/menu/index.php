<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= asset('./build/css/styles.css') ?>"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Menú Principal</title>
  <style>
    .menu-container {
      background-color: #f8f9fa; /* Color de fondo del contenedor */
      padding: 20px;
      border-radius: 10px;
    }
    .menu-link {
      display: block;
      margin: 10px;
      padding: 10px;
      background-color: #343a40; /* Color del cuadrito */
      color: white; /* Color del texto */
      text-decoration: none;
      border-radius: 5px;
    }
    .menu-link:hover {
      background-color: #6c757d; /* Color del cuadrito al pasar el cursor */
    }
    .text-center {
      text-align: center;
    }
    .menu-title {
      margin-bottom: 20px;
      color: #007bff;
    }
    .logout-btn {
      background-color: #dc3545; /* Color del botón de cerrar sesión */
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
    }
    .logout-btn:hover {
      background-color: #c82333; /* Color del botón al pasar el cursor */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="menu-container">
      <h1 class="menu-title text-center">MENU PRINCIPAL</h1>
      <a href="/examen_parcial_franco/roles" class="btn btn-link menu-link">CREAR UN NUEVO ROL</a>
      <a href="/examen_parcial_franco/usuarios" class="btn btn-link menu-link">LISTA DE USUARIOS</a>
      <a href="/examen_parcial_franco/permisos" class="btn btn-link menu-link">ASIGNAR ROLES. ACTIVAR Y DESACTIVAR</a>
      <a href="/examen_parcial_franco/estadistica1" class="btn btn-link menu-link">ESTADISTICA PERSONAS ROLES</a>
      <a href="/examen_parcial_franco/estadistica2" class="btn btn-link menu-link">ESTADISTICA ACTIVOS E INACTIVOS</a>
    </div>
    <div class="text-center mt-3">
      <a href="/examen_parcial_franco/logout" class="btn logout-btn">CERRAR SESIÓN</a>
    </div>
  </div>
</body>
</html>
