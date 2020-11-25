<?php
require_once("../app/vistas/public/template/page.class.php");
Page::templateHeader("Detalles");
require_once("../app/controllers/public/producto/detalle_controller.php");
require_once("../app/controllers/public/account/registrar_controller.php");
Page::Modales();
Page::templateFooter();

?>