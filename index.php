<?php
// define('DS', DIRECTORY_SEPARATOR);
require "cnt.php";
require "app/client/partials/header.php";
$controller = $_GET['controller'] ?? '';
$action = $_GET['action'] ?? '';
switch ($controller){
        case '':
            require 'app/client/controller/root.php';
            break;
        case 'blog':
            require 'app/client/controller/blog.php';
            break;
        case 'contact':
            require 'app/client/controller/contact.php';
            break;
        default:
            echo "Not found Controller";
    }

    require "app/client/partials/form.php";
    require "app/client/partials/footer.php";
