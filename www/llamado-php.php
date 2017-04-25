<?php
/**
*Autores: Ginna Bonilla - Jhon Moreno
*Esta clase contiene todas la funciones  
*/


    /**
     * Este php me permite usar el poder del php con un ejemplo de la tecnología AngularJS...
     * incluso desde el administrador de este sitio.
     */
  
include'class/BD.php';
    $nuevo_obj=new BD();    // llama la clase BD ------- Bien Moreno -------------
           
     if( isset( $_GET[ 'cadena' ] ) )
        
    {     
        $value=$_GET['cadena'];
        echo  $nuevo_obj->consult($value);
        //echo $sql;
    }

     if( isset( $_GET[ 'busqueda' ] ) )
    {     
        $value=$_GET['busqueda'];
        echo  $nuevo_obj->search();
        //echo $sql;
    }
?>
