<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar Marca");
require_once("../../app/controllers/dashboard/marca/update_controller.php");
Page::templateFooter();
?>