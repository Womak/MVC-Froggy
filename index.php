<?php
//
// PHASE: BOOTSTRAP
//

define('FROGGY_INSTALL_PATH', dirname(__FILE__));
define('FROGGY_SITE_PATH', FROGGY_INSTALL_PATH . '/application');

require(FROGGY_INSTALL_PATH.'/src/CFroggy/bootstrap.php');

$fr = CFroggy::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//

$fr->FrontControllerRoute();

//
// PHASE: THEME ENGINE RENDER
//

$fr->ThemeEngineRender();

?>