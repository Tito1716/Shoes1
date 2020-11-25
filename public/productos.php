<?php
require_once("../app/vistas/public/template/page.class.php");
Page::templateHeader("Productos");
require_once("../app/controllers/public/producto/productos_controller.php");
require_once("../app/controllers/public/account/registrar_controller.php");
Page::Modales();
Page::templateFooter();

?>