<?php
$id = $_GET['id'];
require_once '../../lib/config.php';
$query = "SELECT * FROM teachers WHERE id = $id";
$result = $connection->query($query);
$record = $result->fetch_object();
?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="height: 100vh; display: flex; align-items: center; justify-content: center;">
    
    <div class="modal fade show d-block" id="confirmDeleteModal" tabindex="-1" aria-labelledby="modalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow">
                
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5">Confirmar eliminación</h1>
                    </div>
                
                <div class=" pt-0 text-center">
                    <h4 class="mb-3">¿Está seguro de que deseas eliminar permanentemente la información?</h4>
                    <p class="text-muted small">Esta acción no se puede deshacer.</p>
                </div>
                
                <div class="modal-footer justify-content-center gap-4">
                    
                    <a href="./index.php" class="btn btn-lg btn-secondary col-4">No, regresar</a>

                    <form action="delete.php" method="post" class="col-4 gap-4">
                        <input type="hidden" name="id" value="<?php echo $record->id; ?>">
                        <button type="submit" class="btn btn-lg btn-danger w-100">Sí, eliminar</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</body>
</html>