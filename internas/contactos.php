<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <LINK REL=StyleSheet HREF="../css/estilo.css" TYPE="text/css" MEDIA=screen>
    <title>Mi primera App</title>
</head>

<body>
    <header class="cabecera_principal">
        <h2>PLACE TREATS</h2>
    

        <nav class="menuPrincipal">
            <a href="">Inicio</a>
            <a href="">Quienes somos</a>
            <a href="">Reserva</a>
            <a href="">Clientes</a>
            <a href="internas/contactos.php">Contactos</a>
        </nav>
   
</header>
<main>
        <h2 class="h2Home">Contactos</h2>
        <form method="post" action="procesar.php">
        <form>
            <div class = "grupoInput">
                <label for="nombres">Nombres</label>
                <input type="text" name="nombres" id="nombres"
                placeholder="Ingrese sus nombres">
            </div>
            <div class = "grupoInput">
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos"
                placeholder="Ingrese sus apellidos">
            </div>
            <div class = "grupoInput">
                <label for="correo">Correo Electronico</label>
                <input type="text" name="correo" id="correo" 
                placeholder="Ingrese su correo">
            </div>
            
            <select id="tipoUser" name="tipoUser">
                <option>--</option>
                <option value="1">Administrador</option>
                <option value="2">Visitante</option>    
        </select>
            <div class = "grupoInput">
                <button type="submit" value="procesar">Procesar</button>
            </div>
        </form>
    </main>

    <footer class="piepagina">
        <h6>Pie de Pagina</h6>
    </footer>

</body>

</html>