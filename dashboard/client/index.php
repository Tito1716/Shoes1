<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar Clientes");
require_once("../../app/controllers/dashboard/client/index_controller.php");
Page::templateFooter();
?>