<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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
        <div class="d-flex justify-content-between align-items-center pt-4 pb-3 mb-3 border-bottom">
          <h1 class="h2 text-primary fw-bold">
            Docentes
            <a href="insert.html" class="btn btn-primary ms-2">
              <i class="bi bi-plus-square-fill"></i>
            </a>
          </h1>
        </div>

        <div class="table-responsive small">
          <table class="table table-striped table-hover align-middle shadow-sm">
            <thead class="table-primary">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once '../../lib/config.php';
              $query = "SELECT * FROM teachers";
              $result = $connection->query($query);
              if ($result->num_rows == 0) {
              ?>
                <tr>
                  <td colspan="5" class="text-center text-muted fst-italic py-3">No se encontraron registros</td>
                </tr>
              <?php
                return false;
              }
              while ($row = $result->fetch_object()) {
              ?>
                <tr>
                  <td><?php echo $row->id; ?></td>
                  <td><?php echo $row->name; ?></td>
                  <td><?php echo $row->email; ?></td>
                  <td>
                    <a href="update_form.php?id=<?php echo $row->id; ?>" class="btn btn-sm btn-info me-1">
                      <i class="bi bi-pencil-fill"></i>
                    </a>
                    <a href="confirm.php?id=<?php echo $row->id; ?>" class="btn btn-sm btn-danger">
                      <i class="bi bi-trash-fill"></i>
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>
</body>
</html>