<?php

class VistasModeloAdm
{
	protected function MdlMostrarVistas($vistas)
	{

        // URLs permitidas
		$listaBlanca = [
            "home",
            "gestionara",
            "gestionargaleria",
            "usuarios",
            ];


		if (in_array($vistas, $listaBlanca)) {
			if (is_file("./administracion/view-admin/contenido/" . $vistas . "-view.php")) {
				$contenido = "./administracion/view-admin/contenido/" . $vistas . "-view.php";
			} else {
				$contenido = "login";
			}
		} elseif ($vistas == "login") {
			$contenido = "login";
		} elseif ($vistas == "") {
			$contenido = "login";
		} 
        else {
			$contenido = "404";
		}
		return $contenido;
	}
}
