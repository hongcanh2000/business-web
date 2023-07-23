<?php

switch($action) {
    case 'index':
        $blog = "select * from blog";
        $result_blog = mysqli_query($connect,$blog);
        break;
    case 'store':
        $img = $_POST['img'];
        $content = $_POST['content'];
        $title = $_POST['title'];


        $blog = "insert into blog(img,content,title)
        values('$img','$content','$title')";
        // die($blog);
        mysqli_query($connect,$blog);
        break;
    case 'edit':
        $id = $_GET['id'];
        $blog = "select * from blog 
        where id = '$id'";
        $result_blog = mysqli_query($connect,$blog);
        $blog_details = mysqli_fetch_array($result_blog);
        break;

    case 'update':

        $id = $_POST['id'];
        $img = $_POST['img'];
        $content = $_POST['content'];
        $title = $_POST['title'];
    
    
        $blog = "update blog
        set 
        img = '$img',
        content = '$content',
        title = '$title'
        where id = '$id'";
        // die($blog);
        mysqli_query($connect,$blog);
        break;
    case 'delete':
        $id = $_GET['id'];
        $blog = "delete from blog where id = '$id'";
        mysqli_query($connect,$blog);
        break;
}