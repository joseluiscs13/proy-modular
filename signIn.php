<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GanttFlow</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #fff;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
        }

        .form-signin img {
            display: block;
            margin: 0 auto 20px;
        }

        .form-signin h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-signin .form-floating {
            margin-bottom: 15px;
        }

        .form-signin .form-check {
            margin-bottom: 20px;
        }

        .form-signin button {
            margin-top: 10px;
        }

        .text-body-secondary {
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <main class="form-signin">
        <form>
            <img src="images/GanttFlow.png" alt="Logo" width="160" height="57">
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>