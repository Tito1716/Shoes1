<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Cerrar sesión");
require_once("../../app/controllers/dashboard/account/logout_controller.php");
Page::templateFooter();
?>