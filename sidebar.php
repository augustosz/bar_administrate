<!-- sidebar.php -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="sidebar">
  <a href="inicio.php">Inicio</a>
  <a href="productos.php">Productos</a>
  <a href="ventas.php">Ventas</a>
  <a href="empleados.php">Empleados</a>
  <a href="proveedores.php">Proveedores</a>
  <a href="clientes.php">Clientes</a>
  <a href="compras.php">Compras</a>
  <a href="estadisticas.php">Estadisticas</a>
  <a href="logout.php" class="logout">Cerrar Sesión</a> 
</div>

<style>
    /* Estilos para la barra lateral */
    .sidebar {
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding-top: 20px;
      width: 250px;
    }

    .sidebar a {
      color: white;
      padding: 10px;
      text-decoration: none;
      display: block;
    }

    .sidebar a:hover {
      background-color: #575d63;
    }

    .content {
      margin-left: 260px;
      padding: 20px;
    }

    .logout {
        background-color: #dc3545; /* Color de fondo rojo para cerrar sesión */
    }
    .logout:hover {
        background-color: #c82333; /* Color más oscuro al hacer hover */
    }
  </style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>