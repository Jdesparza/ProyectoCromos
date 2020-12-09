<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1 de Ing. Web</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header class="cabeceraPrincipal">
        <img class="anime" src="../images/clei-logo.png" alt="Logotipo del evento">
        <h1>V Conferencia de desarrollo de software UTPL 2021</h1>
    </header>
    <nav class="menuPrincipal">
        <a href="../index.html">Inicio</a>
        <a href="../internas/ponentes.html">Ponentes</a>
        <a href="../internas/campus.html">Campus</a>
        <a href="../internas/tarifas.html">Tarifas</a>
        <a href="registro.php">Registro</a>
        <a href="../internas/contactos.html">Contáctos</a>
    </nav>
    <main>
        <section class="contenedor">
            <h2>Formulario de registro al evento</h2>
        </section>
        <form method="post" action="guardardatos.php">
            <div class="grupo">
                <label for="nombres">Nombres</label>
                <input type="text" id="nombres" name="nombres" placeholder="Ingrese su nombre" required>
            </div>
            <div class="grupo">
                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" placeholder="Ingrese su correo" required>
            </div>
            <div class="grupo">
                <label for="dni">DNI/Cedula</label>
                <input type="text" id="dni" name="dni" placeholder="Ingrese su DNI">
            </div>
            <div class="grupo">
                <label for="pais">Pais</label>
                <input type="text" id="pais" name="pais" placeholder="Ingrese su pais">
            </div>
            <div class="grupo">
                <label for="ciudad">Ciudad</label>
                <input type="text" id="ciudad" name="ciudad" placeholder="Ingrese su ciudad">
            </div>
            <div class="grupo">
                <label for="profesion">Profesión</label>
                <input type="text" id="profesion" name="profesion" placeholder="Ingrese su profesion">
            </div>
            
            <div class="grupo">
                <label for="tipoParticipante">Tipo de Usuario</label>
                    <select name="tipoParticipante" id="tipoParticipante">
                        <option disabled selected>Seleccione</option>
                        <option value="1">Profesor UTPL</option>
                        <option value="2">Estudiante UTPL</option>
                        <option value="3">Publico en general</option>
                    </select>
            </div>
            <div class="grupo">
                <label for="talleresEvento">Tipo de Usuario</label>
                    <select name="talleresEvento" id="talleresEvento">
                        <option disabled selected>Seleccione</option>
                        <option value="1">Visualización de datos </option>
                        <option value="2">Herramientas de explotación de datos</option>
                        <option value="3">Big data </option>
                    </select>
            </div>


            <button type="submit" class="btnGuardar">Guardar</button>
        </form>
    </main>
    
    <footer class="piePagina">    
        <img src="../images/utpl.png">
        <h6>Derechos Reservados UTPL 2020 by: @jecueva</h6>
    </footer>
</body>
</html>