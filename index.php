<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GanttFlow</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Archivo de estilos personalizados-->
  <link rel="stylesheet" href="styles/index.css">
</head>

<body>

  <?php include('header.php') ?>

  <div class="container-fluid text-center presentacion">
    <div class="row">
      <div class="col">
        <h2 class="custom-h2">Simplifica, planifica, ahorra</h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="custom-p">¡Optimiza tus proyectos con GanttFlow! Gantt fácil, colaboración eficiente, resultados
          garantizados</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-3">
        <a class="btn btn-lg start-btn" href="#" role="button">Comienza ahora</a>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-10 col-sm-9 col-md-8 col-lg-6 col-xl-3">
        <img src="images/gantt-chart-3.jpeg" alt="Logo" class="img-fluid gantt-chart" />
      </div>
    </div>
  </div>
  <?php include('footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>