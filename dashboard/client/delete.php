<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar cliente");
require_once("../../app/controllers/dashboard/client/delete_controller.php");
Page::templateFooter();
?>