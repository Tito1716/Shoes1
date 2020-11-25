<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Gestionar productos");
require_once("../../app/controllers/dashboard/producto/index_controller.php");
Page::templateFooter();
?>