
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/logo.png" sizes="32x32" />
    <link rel="icon" href="../images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../index.php">Inicio</a>
            <a href="internas/servicios.php">servicios</a>
			<a href="#">Productos</a>
			<a href="internas/adopcion.php">adopcion</a>
			<a href="#">Contactos</a>
		</nav>
	</header>
	<main>
        <h2>Formulario </h2>
        <form method="post"action="procesar.php">
        <div class="grupoInput">
            <label for="nombres">Nombres<span class = "alerta">*</label>
            <input type="text" name="nombres" id="nombres" placeholder="ingrese sus nombres" require>
</div>
<div class="grupoInput">
            <label for="Tipo Calculo">TipoCalculo<span class = "alerta">*</label>
            <input type="text" name="TipoCalculo" id="TipoCalculo" placeholder="ingrese TipoCalculo" require>
</div>
<div class="grupoInput">
            <label for="Altura Hombro">Altura Hombro</label>
            <input type="email" name="Altura Hombro" id="Altura Hombro" placeholder="ingrese Altura Hombro">
</div>
<div class="grupoInput">
            <label for="Distancia">Distancia</label>
            <input type="text" name="Distancia" id="Distancia" placeholder="ingrese su Distancia">
</div>
<div class="grupoInput">
            <label for="Circunferencia">Circunferencia</label>
            <input type="text" name="Circunferencia" id="Circunferencia" placeholder="ingrese su Circunferencia">
</div>
<div class="grupoInput">
            <label for="Hs">HS<span class = "alerta">*</label>
            <input type="number" name="HS" id="HS" placeholder="ingrese su HS" require>
</div>
<div class="centrado">
<button class="boton" type="submit">Guardar</button>
</div>

</form>
</main>

	<section class="sponsor">
		<h3 class= "colorAzul">Sponsor</h3>
	</section>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-facebook"></i></a>
		</nav>
	</footer>
</div>
</body>
</html>