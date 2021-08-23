<?php
/**
 * Clase encargada de tomar la vista ingresada por URL (GET) y
 * procesarla al publico
 */
class VistaModelo
{

    /**
     * Funcion toma la entrada GET y la prosesa para luego enviarla a mostrar.
     * @param string $vistas Toma GET de la url
     * @return string Retirna el contenido que se va a mostrar al publico
     */
    protected function MdlMostrarVistas($vistas)
    {

        // URLs permitidas
        $listaBlanca = [];


        if (in_array($vistas, $listaBlanca)) { //verifica si el sitio existe en la lista

            if (is_file("./view/contenido/" . $vistas . "-view.php")) { //verifica si existe el archivo en el servidor

                $contenido = "./view/contenido/" . $vistas . "-view.php";
            } else {

                $contenido = "home";
            }
        } else {

            $contenido = "404";
        }
        return $contenido; // retorna la vista
    }
}
