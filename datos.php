<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recibir datos de firma</title>
</head>
<body>
  <?php
    echo $_POST['firma'],'<br>';
    echo $_POST['nombre'],'<br>';
    echo $_POST['fecha'],'<br>';
    echo $_POST['solicitudId'],'<br>';
  ?>

  <script>
    const firmaImagen = document.createElement("img");
  </script>
</body>
</html>