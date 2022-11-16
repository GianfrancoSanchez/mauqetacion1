<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="images/logo.png" sizes="32x32" />
    <link rel="icon" href="images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../">Inicio</a>
			<a href="servicios.php">Servicios</a>
			<a href="#">Productos</a>
			<a href="#">Adopción</a>
			<a href="#">Contactos</a>
            <a href="#">Simulador</a>
            <a href="#"><img src="../images/lupa.jpg" alt="Lupa"></a>
		</nav>
	</header>
	<main>
        <h2>Formulario de adopción</h2>
        <form method="post" action="procesar.php">
            <div class="grupoInput">
                <label for="nombres">Nombre<span class="alerta">*</span></label>
                <input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre" required>
            </div>
            <div class="grupoInput">
                <label for="tcalculo">Tipo de calculo<span class="alerta">*</span></label>
                <select name="tcalculo" id="tcalculo" placeholder="Ingrese el tipo de calculo" required>
                    <option value="macho">Macho</option>
                    <option value="hembra">Hembra</option>
                </select>
            </div>
            <div class="grupoInput">
                <label for="alturaH">Altura del hombro</label>
                <input type="number" name="alturaH" id="alturaH" placeholder="Ingrese la Altura del hombro">
            </div>
            <div class="grupoInput">
                <label for="distanciaO">Distancia occipucio - base cola<span class="alerta">*</span></label>
                <input type="number" name="distanciaO" id="distanciaO" placeholder="Ingrese la distancia occipucio - base cola" required>
            </div>
            <div class="grupoInput">
                <label for="circunferencia">Circunferencia Pelvica</label>
                <input type="number" name="circunferencia" id="circunferencia" placeholder="Ingrese su circunferencia Pelvica">
            </div>
            <div class="grupoInput">
                <label for="HS">HS</label>
                <input type="number" name="HS" id="HS" placeholder="Ingrese su HS" required5>
            </div>
            <div class="grupoInput">
                <label for="peso">Peso Corporal</label>
                <input type="number" name="peso" id="peso" placeholder="Ingrese su Peso Corporal">
            </div>
            <div class="centrado">
                <button type="submit" class="boton">Calcular</button> 
            </div>
        </form>
        
    </main>
	<section class="sponsor">
		<figure class="logoSponsors">
            <a href="https://www.utpl.edu.ec"><img src="https://www.utpl.edu.ec/sites/default/files/Recurso%201%403x.png" alt="UTPL" class="utpl img"></a>
			<a href=".."><img src="../images/logotipoPet.png" alt="Pets" class="imgPets img"></a>
        </figure>
	</section>
	</section>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-instagram"></i></a>
			<a href=""><i class="fa-brands fa-tiktok"></i></a>
		</nav>
	</footer>
</div>
</body>
</html>