<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Crear usuario");
require_once("../../app/controllers/dashboard/usuario/create_controller.php");
Page::templateFooter();
?>