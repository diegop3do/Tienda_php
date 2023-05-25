<?php

require_once("../model/Tiendas.php");
$tiendas = new Tienda(); // Instancia de la clase Clientes

    switch($_GET["op"]){
        case "listar":
            $datos = $tiendas->get_tienda();
            echo json_encode($datos);
            break;
        
        case "eliminar":

            if(isset($_POST['id'])){
                $tiendas->delete_tienda($_POST['id']);
            }
            break;
        
        case "add":

            if(isset($_POST['Nombre']) & isset($_POST['Fecha_de apertura'])){
                $tiendas->insert_tienda($_POST['Nombre'], $_POST['Fecha_de_apertura']);
            }
            break;

        case "edit":
            if(isset($_POST['Id']) & isset($_POST['Nombre']) & isset($_POST['Fecha_de_apertura'])){
                $tiendas->update_tienda($_POST['Id'], $_POST['Nombre'], $_POST['Fecha_de_apertura']);
            }
            break;      

        default:
            break;
    }


?>