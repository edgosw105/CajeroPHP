<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cajero Electrónico Comfandi Yumbo - Retiro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1 class="text-center">Cajero Electrónico Comfandi Yumbo - Retiro</h1>

    <form action="procesar_retiro.php" method="POST">
      <div class="form-group">
        <label for="valor">Valor a retirar:</label>
        <input type="number" class="form-control" id="valor" name="valor" placeholder="Ingrese el valor a retirar">
      </div>

      <button type="submit" class="btn btn-primary">Retirar</button>
    </form>

    <a href="principal.php" class="btn btn-secondary mt-3">Volver</a>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
