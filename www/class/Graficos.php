<?php 
/**
*Autores: Ginna Bonilla - Jhon Moreno
*Esta clase contiene todas la funciones  
*/

/**
*Esta clase contiene todas las funciones  
*/
class Graficos
	{
			/**
			*Esta función contiene el link de la libreria de bootstrap. 
			*/
		function estilos($carpeta=null)
			{
				$salida="";
				$salida=" <link rel='stylesheet'  href='css\bootstrap/bootstrap.min.css'>";
						 
				return $salida;		 
			}
			/**
			*Esta función se encarga de retornar el encabezado.
			*
			*/
		function encabezado($text,$texp)
			{
				$salida="";
				$salida="<div class='page-header'><h1>$text <small>$texp</small></h1></div>";
				return $salida;
			}
			/**
			*Esta funcion se encarga de imprimir las imagenes de la busqueda.
			*/
		function ayuda()
			{
				$salida="";
				$salida="<a href='ayuda.php'><img src='imagenes/help.png' align='right'></a>";
				return $salida;
			}
	}
?>
