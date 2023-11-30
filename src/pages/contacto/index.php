<?php

require("../../db/db.php");

if (isset($_POST['submit'])) {
    $correo = $_POST['contacto_correo'];
    $nombre = $_POST['contacto_nombre'];
    $asunto = $_POST['contacto_asunto'];
    $comentario = $_POST['contacto_comentario'];
    echo "<script> alert($correo); </script>";

    $sql = "INSERT INTO contacto (correo, nombre, asunto, comentario) VALUES (:correo, :nombre, :asunto, :comentario)";

    try {
        $stmt = $conn->prepare($sql);
        $stmt ->bindParam(':correo', $correo);
        $stmt ->bindParam(':nombre', $nombre);
        $stmt ->bindParam(':asunto', $asunto);
        $stmt ->bindParam(':comentario', $comentario);
        $stmt->execute();

        echo "<script> alert('Su comentario fue enviado exitosamente.'); </script>";
        
    } catch (\Throwable $th) {
        echo "<script> alert('Hubo un error al enviar su comentario.'); </script>";
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería Matos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer></script>
</head>
<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ps-5">
            <a class="navbar-brand" href="../../../index.html">Librería Matos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="../libros/index.php">Libros</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../autores/index.php">Autores</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contacto</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <main class="d-flex flex-column justify-content-center align-items-center">
        <div class="container mt-3">
            <h1 class="text-center mb-4">Formulario de Contacto</h1>
            <form action="#" method="post" class="p-4 rounded shadow-lg bg-light">
                <div class="mb-3">
                    <label for="contacto_correo" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" name="contacto_correo" required>
                </div>
                <div class="mb-3">
                    <label for="contacto_nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="contacto_nombre" required>
                </div>
                <div class="mb-3">
                    <label for="contacto_asunto" class="form-label">Asunto</label>
                    <input type="text" class="form-control" name="contacto_asunto" required>
                </div>
                <div class="mb-3">
                    <label for="contacto_comentario" class="form-label">Comentario</label>
                    <textarea class="form-control" name="contacto_comentario" rows="3" required></textarea>
                </div>
                <button name="submit" class="btn btn-success btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </main>
</body>
</html>