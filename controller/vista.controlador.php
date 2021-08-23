<?php
include "core/configGeneral.php";
require_once "./model/vista.modelo.php";

/**
 *  Clase encargada de leer la url y determinar que vista se va a mostrar
 *  ( Administracion / Usuario corriente )
 */  
class VistaControlador extends VistaModelo
{
    /**
     * @return string administracion o usuario corriente
     */
    public function CtrMostrarInicio()
    {
        if (isset($_GET['views'])) {

            $ruta = explode("/", $_GET["views"]);
            if ($ruta[0] == "administracion") {
                return require_once './administracion/index.php';  // retorna la vista del admnistrador en caso de que se encuentre en el apartado del admin
            } else {
                return require_once './view/inicio.php'; // vista de usuario corriente
            }
        } else {

            return require_once './view/inicio.php';
        }
    }

    /**
     * @return string s
     */
    public function CtrMostrarVistas()
    {
        if (isset($_GET["views"])) {
            $ruta      = explode("/", $_GET["views"]);
            $respuesta = VistaModelo::MdlMostrarVistas($ruta[0]);
        } else {
            $respuesta = "login";
        }

        return $respuesta;
    }
}
