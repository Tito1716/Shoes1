<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Bienvenidos");
require_once("../../app/controllers/dashboard/account/index_controller.php");
Page::templateFooter();
?>