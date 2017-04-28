<?php

    /**
    * Autor: jhon moreno y gina bonilla 
    * Este código borra los archivos de la instalación y redirige al sitio. 
    */

    include( "Verificador.php" );
    $objeto_verificador = new Verificador();

    $objeto_verificador->borrar_archivo( "instalador.php" );
    $objeto_verificador->borrar_archivo( "instalando.php" );
    header( "location: desktop.php" );
