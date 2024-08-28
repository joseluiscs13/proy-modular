<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GanttFlow</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Archivo de estilos personalizados -->
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <main class="form-signin">
        <form>
            <a href="index.php"><img src="images/logo.png" alt="Logo" width="160" height="57"></a>
            <h1 class="h3 mb-3 fw-normal">Inicia Sesión</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Correo</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Recuerdame</label>
            </div>

            <button class="btn btn-primary w-100" type="submit">Iniciar Sesión</button>
            <p class="mt-5 mb-3 text-body-secondary"> ¿No tienes cuenta? Registrate aquí</p>
        </form>
    </main>

</body>

</html>