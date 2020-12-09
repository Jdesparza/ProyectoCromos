<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoNometría</title>
    <!-- link rel="stylesheet" href="../css/estilos.css"--> 
</head>
<body>
    <header class="cabeceraPrincipal">
        <h1>EcoNometría</h1>
    </header>
    <nav class="menuPrincipal">
        <a href="">Inicio</a>
        <a href="">Juego</a>
        <a href="">Álbum</a>
        <a href="">Intercambio</a>
        <a href="">Registrarse</a>
    </nav>
    <main>
        <section class="contenedor">
            <h2>INICIAR SESIÓN</h2>
        </section>
        <form method="post" action="validar.php">
             <div class="grupo">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" placeholder="Ingrese su usuario">
            </div>
             <div class="grupo">
                <label for="clave">Clave</label>
                <input type="password" id="clave" name="clave" placeholder="Ingrese su clave">
            </div>
            <button type="submit" class="btnGuardar">Guardar</button>
        </form>
    </main>
    
    <footer class="piePagina">
        <h6>Derechos Reservados UTPL 2020 by: @jecueva11</h6>
    </footer>
</body>
</html>