<?php 
require_once("../app/vistas/public/template/page.class.php");
Page::templateHeader("Comprar");
Page::Modales();
require_once("../app/controllers/public/carrito/comprar_controller.php");
require_once("../app/controllers/public/account/registrar_controller.php");
Page::templateFooter();

?>