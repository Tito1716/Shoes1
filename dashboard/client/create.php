<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Crear cliente");
require_once("../../app/controllers/dashboard/client/create_controller.php");
Page::templateFooter();
?>