<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar cliente");
require_once("../../app/controllers/dashboard/client/update_controller.php");
Page::templateFooter();
?>