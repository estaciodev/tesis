<?php
require_once "./administracion/model-admin/vista.modelo.php";
class vistaControladorAdm extends VistasModeloAdm
{
	public function ctrMostrarInicio()
	{
		return require_once './administracion/view-admin/adminsite.php';
	}
	public function ctrMostrarVistas()
	{
		if (isset($_GET["views"])) {

			$ruta = explode("/", $_GET["views"]);
			
			if ($ruta[1] == "") {
				# code...
				$respuesta = "login";
			}else{
				
				$respuesta = VistasModeloAdm::MdlMostrarVistas($ruta[1]);
			}

		} else {
			$respuesta = "login";
			// require_once './view/inicio.php';

		}
		return $respuesta;
	}
}
