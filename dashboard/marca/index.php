<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar Marca");
require_once("../../app/controllers/dashboard/marca/index_controller.php");
Page::templateFooter();
?>