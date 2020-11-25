<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Crear Marca");
require_once("../../app/controllers/dashboard/marca/create_controller.php");
Page::templateFooter();
?>