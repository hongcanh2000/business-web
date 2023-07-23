<?php
$dir = dirname(__DIR__,1);
// die($dir);
switch($action) {
    case 'index':
        require $dir . DIRECTORY_SEPARATOR. 'model/blog.php';
        require $dir . DIRECTORY_SEPARATOR. 'view/blog/index.php';
        break;
    case 'create':
        require $dir . DIRECTORY_SEPARATOR. 'view/blog/create.php';

        break;
    case 'store':
        require $dir . DIRECTORY_SEPARATOR. 'model/blog.php';
        header("location: ?controller=blog");
        break;
    case 'edit':
        require $dir . DIRECTORY_SEPARATOR. 'model/blog.php';
        require $dir . DIRECTORY_SEPARATOR. 'view/blog/edit.php';
        break;
    case 'update':
        require $dir . DIRECTORY_SEPARATOR. 'model/blog.php';
        header("location: ?controller=blog");
        break;
    case 'delete':
        require $dir . DIRECTORY_SEPARATOR. 'model/blog.php';
        header("location: ?controller=blog");
        break;
}