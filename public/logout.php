<?php
require_once("../app/vistas/public/template/page.class.php");
Page::templateHeader("Cerrar sesión");
require_once("../app/vistas/public/slider/slider_inicio.php");
require_once("../app/controllers/public/account/logout_controller.php");
Page::templateFooter();
?>