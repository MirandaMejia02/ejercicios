<?php
class Imagen {
	public function mostrar($ruta) {
		echo "<div class='imagen'><img src='$ruta' /></div>";
	}
}

if (isset($_POST['numero'])) {
	$numero = (int)$_POST['numero'];
	$imagen = new Imagen();
	for ($i = 0; $i < $numero; $i++) {
		$imagen->mostrar("iimagen.png");
	}
}
#me equivoque varias veces en el png de la imagen 
?>
