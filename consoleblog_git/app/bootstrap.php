<?php
// load config
require_once 'config/config.php';
// load libraries
// require_once 'libraries/core.php';
// require_once 'libraries/controller.php';
// require_once 'libraries/database.php';

// load helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

// Autoload core libraries instead of the above code bringing them in
spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
});