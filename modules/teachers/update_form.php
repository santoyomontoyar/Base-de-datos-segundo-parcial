<?php 
$id = $_GET['id'];
require_once '../../lib/config.php';
$query = "SELECT * FROM teachers WHERE id = $id";
$result = $connection->query($query);
$record = $result->fetch_object();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Formulario de Usuarios</title>
    
</head>

<body>
  <header class="navbar sticky-top flex-md-nowrap p-2 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Tabla de docentes <?php ?></a>
  </header>

    <div class="container-fluid">
        <div class="row">
      <div class="sidebar col-md-3 col-lg-2 p-0">
        <div class="offcanvas-md offcanvas-end bg-white" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title fw-bold text-primary" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 active bg-primary text-white rounded-3 mx-2" aria-current="page" href="index.php"> 
                    <i class="bi bi-people-fill"></i>
                    Usuarios
                  </a> 
              </li>
            </ul>
          </div>
        </div>
      </div>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                              <h1 class="h2 text-primary fw-bold">Docentes</h1>
                </div>
                <div class="form">
                    <form action="update_user.php" method="post">
                        <div class="mb-3">
                            <label for="nameInput" class="form-label fw-bold">Nombre</label>
                            <input type="text" class="form-control" id="nameInput" placeholder="Escribre tu nombre" name="name" value="<?php echo $record->name; ?>">
                        </div>
                <div class="form">
                    <form action="">
                        <div class="mb-3">
                            <label for="emailInput" class="form-label fw-bold">Correo</label>
                            <input type="text" class="form-control" id="emailInput" placeholder="Escribre tu correo" name="email" value="<?php echo $record->email; ?>">
                        </div>
                <div class="form">
                    <form action="">
                        <div class="mb-3 bg-warning p-3 rounded text-dark">
                            <label for="passwordInput" class="form-label fw-bold">Contraseña</label>
                            <input type="password" class="form-control" id="passwordInput" placeholder="Escribre tu contraseña" name="password" value="<?php echo $record->password; ?>">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-success btn-lg" value="Editar">
                        </div>
                    </form>

                </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>