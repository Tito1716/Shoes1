<?php 
require_once("../app/vistas/public/template/page.class.php");
Page::templateHeader("Eliminar carrito");
require_once("../app/controllers/public/carrito/eliminar_carrito_controller.php");
require_once("../app/controllers/public/account/registrar_controller.php");
Page::Modales();
Page::templateFooter();

?>