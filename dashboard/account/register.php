<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Registrar");
require_once("../../app/controllers/dashboard/account/register_controller.php");
Page::templateFooter();
?>