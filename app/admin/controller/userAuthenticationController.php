<?php

$dir = dirname(__DIR__, 1);
// die($dir);
switch ($action) {
    case 'index':
        require $dir.DIRECTORY_SEPARATOR. 'view/userauthentication/index.php';
        break;

    case 'login':
        require $dir.DIRECTORY_SEPARATOR. 'model/userauthentication.php';
        break;
    case 'signout':
        require $dir.DIRECTORY_SEPARATOR. 'model/userauthentication.php';
        break;
}