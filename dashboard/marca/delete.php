<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar Marca");
require_once("../../app/controllers/dashboard/marca/delete_controller.php");
Page::templateFooter();
?>