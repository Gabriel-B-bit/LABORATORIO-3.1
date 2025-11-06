<?php
function e($s) {
  return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Datos recibidos (GET)</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f8fb;
      color: #333;
      padding: 40px;
    }
    h1 {
      color: #0077b6;
    }
    .card {
      background: white;
      border-radius: 10px;
      padding: 20px;
      max-width: 600px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    p strong {
      color: #0077b6;
    }
  </style>
</head>
<body>
  <h1>Datos del Sitio Turístico (Método GET)</h1>

  <div class="card">
    <?php if (!empty($_GET)): ?>
      <p><strong>Nombre:</strong> <?= e($_GET['nombre']) ?></p>
      <p><strong>Descripción:</strong> <?= e($_GET['descripcion']) ?></p>
      <p><strong>Provincia:</strong> <?= e($_GET['provincia']) ?></p>
      <p><strong>Tipo de turismo:</strong> <?= e($_GET['tipo']) ?></p>
      <p><strong>Servicios:</strong> 
        <?php
          $servicios = $_GET['servicios'] ?? [];
          echo !empty($servicios) ? e(implode(", ", $servicios)) : "Ninguno";
        ?>
      </p>
      <p><strong>Correo:</strong> <?= e($_GET['email']) ?></p>
      <p><strong>Fecha de registro:</strong> <?= e($_GET['fecha']) ?></p>
      
      <p><em>⚠️ Nota: El archivo seleccionado no se envía con GET.</em></p>
    <?php else: ?>
      <p>No se recibieron datos del formulario.</p>
    <?php endif; ?>
  </div>
</body>
</html>
