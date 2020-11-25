<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar Compras");
require_once("../../app/controllers/dashboard/compras/index_controller.php");
Page::templateFooter();
?>