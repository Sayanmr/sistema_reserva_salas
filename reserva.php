<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magic Films - Reserva tu película</title>
  <link rel="stylesheet" href="css/reserva.css?v=1.0">
</head>
<body>
  <header>
    <nav>
      <!--logo y menú de navegación aquí -->
     <img src="../MAGIC FILMS pagina/imagenes de pelis/logo-magic-film.png" alt="LOGO MAGIC FILM" id="logo">
    </nav>
  </header>

  <main>
    <section class="hero">
      <!-- Imagen de fondo y texto de bienvenida aquí -->
    </section>

    <section class="reservation-form">
      <h2>Reserva tu película</h2>
  
      
      <form class="col-4 p-3" method="POST">
      <?php
    include ('conexion.php');
    include ('controlador/reservapeli.php');
    ?>
            <!-- Agrega campos de entrada para el nombre de usuario y el correo electrónico -->
        
            <label for="nombre" >Nombre del reservador:</label>
            <input type="text" id="nombre" name="nombre" required>
          
          
            <!-- Resto del formulario existente -->
          

        <label for="pelicula">Selecciona una película:</label>
       
        <select id="pelicula" name="pelicula">
          <option value="" disabled selected>Selecciona una opción</option>
            <optgroup label="Películas de terror">
                <option value="Insidious">Insidious</option>
                <option value="The crazies">The crazies</option>
                <option value="Cisne negro">Cisne negro</option>
                <option value="Stake land">Stake land</option>
                <option value="El aro 3">El aro 3</option>
                <option value="Badabook">Badabook</option>
                <option value="Déjame entrar">Déjame entrar</option>
                <option value="El conjuro">El conjuro</option>

                <optgroup label="Películas de niños">
                    <option value="Super mario bros">Super mario bros</option>
                    <option value="Luca">Luca</option>
                    <option value="Mi vecino totoro">Mi vecino totoro</option>
                    <option value="Zootopia">Zootopia</option>
                    <option value="Hotel transylvania">Hotel transylvania</option>
                    <option value="Anbracadabra 2">Anbracadabra 2</option>
                    <option value="Kung fu panda">Kung fu panda</option>
                    <option value="Elementos">Elementos</option>

                    <optgroup label="Películas de acción">
                        <option value="pulp fiction">Pulp Fiction</option>
                        <option value="the matrix">The Matrix</option>
                        <option value="Avengers end game">Avengers: Endgame</option>
                        <option value="Spider-man">Spider-man</option>
                        <option value="interstellar">interstellar</option>
                        <option value="Lucy">Lucy</option>
                        <option value="Avatar">Avatar</option>
                        <option value="Demon Slayer">Demon Slayer</option>              
        <!-- Añade más películas de terror aquí -->
            </optgroup>
          <!-- Opciones de películas aquí -->
        </select>
      
        <label for="fecha">Selecciona una fecha:</label>
        <input type="date" id="fecha" name="fecha">
 
<label for="hora">Horario disponible:</label> 
<select id="hora" name="hora">
          <option value="" disabled selected>Selecciona una hora</option>
  <option value="07:00">7:00 AM</option>
  <option value="08:00">8:00 AM</option>
  <option value="09:00">9:00 AM</option>
  <option value="10:00">10:00 AM</option>
  <option value="11:00">11:00 AM</option>
  <option value="12:00">12:00 PM</option>
  <option value="01:00">1:00 PM</option>
  <option value="02:00">2:00 PM</option>
  <option value="03:00">3:00 PM</option>
  <option value="04:00">4:00 PM</option>
  <option value="05:00">5:00 PM</option>
  <option value="06:00">6:00 PM</option>
  <option value="07:00">7:00 PM</option>
  <option value="08:00">8:00 PM</option>
  <option value="09:00">9:00 PM</option>
  <option value="10:00">10:00 PM</option>
  <!-- Continúa con todas las horas del día -->
  <option value="23:00">11:00 PM</option>
          <!-- Opciones de horas aquí -->
</select> 

         <!--<label for="seats">Selecciona tus asientos:</label>
        <div id="seats-container">
            <button class="seat">A1</button>
            <button class="seat">B2</button>
            <button class="seat">C3</button>
            <button class="seat">D4</button>
            <button class="seat">E5</button>
            <button class="seat">F6</button>
            <button class="seat">G7</button>
            <button class="seat">H8</button>
            <button class="seat">I9</button>
            <button class="seat">J10</button>
            <button class="seat">K11</button>
            <button class="seat">L12</button>
           Botones de asientos aquí 
        </div>-->
    
        <!-- DEJAR ESTE CÓDIGO-->
        <label for="fila">Selecciona la fila:</label>
<select name="fila" id="fila">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
  </select>
  <label for="asiento">Selecciona el asiento:</label>
  <select name="asiento" id="asiento">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
 
 <form method="post">
<input type="submit" class="btn" value="Reservar" name="btnreservar">
</form>

</form>
</section>
</main>
<footer>
<!-- Información de contacto y derechos de autor aquí -->
</footer>
</body>
</html>