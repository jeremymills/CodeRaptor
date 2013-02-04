<?php
/**
 * Define constant variable
 * @ignore
 */
define('IN_APPLICATION', true);

/**
 * Error reporting 
 * @ignore
 */
ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

/**
 * Require bootstrap initializtion
 * @ignore
 */
require_once __DIR__ . DIRECTORY_SEPARATOR . 'bootstrap.php';




?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form enctype="utf-8" method="post">
            <input type="text" name="uName" />
            <br />
            <input type="password" name="pWord" />
            <br />
            <input type="submit" name="submit" value="submit" />
        </form>
        <!-- run verification output -->
        
    </body>
</html>