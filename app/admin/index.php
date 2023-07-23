<?php
$dir = dirname(__DIR__,2);
 require $dir . DIRECTORY_SEPARATOR. 'cnt.php';
$controller = $_GET['controller'] ?? '';
$action = $_GET['action'] ?? 'index';
switch ($controller){
    case '':
        require  $dir . DIRECTORY_SEPARATOR. 'app/admin/controller/userAuthenticationController.php';
        break;
    case 'blog':
        require $dir . DIRECTORY_SEPARATOR. 'app/admin/controller/blogController.php';
        break;
}