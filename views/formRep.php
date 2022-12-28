<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de reparacion</title>
</head>

<body>
    <header>


    </header>

    <nav>


    </nav>

    <main>
        <!--formulario Comercial -->
        <div class="Contenedor">
            <form action="insertarPeticion.php" method="get">
                <div class="contenedor">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="problema">Problema del movil:</label>
                    <textarea id="problema" name="problema"></textarea>
                </div>
                <div>
                    <label for="fecha">Fecha:</label>
                    <input type="date" name="fecha" id="fecha">
                </div>
                <div>
                    <input type="submit" name="enviar" id="enviar">
                </div>
            </form>
        </div>
    </main>

    <footer>


    </footer>


</body>

</html>