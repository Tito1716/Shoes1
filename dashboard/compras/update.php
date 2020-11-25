<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar Compras");
require_once("../../app/controllers/dashboard/compras/update_controller.php");
Page::templateFooter();
?>