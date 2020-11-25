<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader("Editar perfil");
require_once("../../app/controllers/dashboard/account/profile_controller.php");
Page::templateFooter();
?>