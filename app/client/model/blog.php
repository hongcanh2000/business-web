<?php

switch($action){
    case '':

        $blog_lastest = "select * from blog_lastest";
        $result_blog_lastest = mysqli_query($connect,$blog_lastest);

        $blog = "select * from blog";
        $result_blog = mysqli_query($connect,$blog);

        break;
}