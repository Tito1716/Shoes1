<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Cancelar compra");
require_once("../../app/controllers/dashboard/compras/delete_controller.php");
Page::templateFooter();
?>