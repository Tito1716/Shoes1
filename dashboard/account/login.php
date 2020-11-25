<?php
require_once("../../app/vistas/dashboard/templates/page.class.php");
Page::templateHeader(null);
require_once("../../app/controllers/dashboard/account/login_controller.php");
Page::templateFooter();
?>