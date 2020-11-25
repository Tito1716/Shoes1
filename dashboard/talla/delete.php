<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar Peso");
require_once("../../app/controllers/dashboard/talla/delete_controller.php");
Page::templateFooter();
?>