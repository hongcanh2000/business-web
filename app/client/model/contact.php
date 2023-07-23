<?php

switch($action){
    case '':
        $contact = "select * from contact";
        $result_contact = mysqli_query($connect,$contact);
        break;
}
