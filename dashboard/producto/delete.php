<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar producto");
require_once("../../app/controllers/dashboard/producto/delete_controller.php");
Page::templateFooter();
?>