<?php

switch($action){
    case '':
        $banner = "select * from banner";
        $result_banner = mysqli_query($connect,$banner);

        $client = "select * from client";
        $result_client = mysqli_query($connect,$client);

        $value = "select * from value";
        $result_value = mysqli_query($connect,$value);

        $review = "select * from review";
        $result_review = mysqli_query($connect,$review);

        $team = "select * from team";
        $result_team = mysqli_query($connect,$team);
        break;
}