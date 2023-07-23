<?php
//$connect = mysqli_connect('localhost','root','','business_web');
//mysqli_set_charset($connect,'utf8');
switch ($action){
    case 'login':
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from user
        where email = '$email' and password = '$password'";
        $result = mysqli_query($connect,$sql);
        $result_login = mysqli_num_rows($result);

        if ($result_login == 1) {
            session_start();
            $each = mysqli_fetch_array($result);

            $_SESSION['id'] = $each['id'];
            $_SESSION['email'] = $each['email'];
            $_SESSION['password'] = $each['password'];
            header('location:?controller=blog');
            exit;
        }
        header('Location:index.php?error=Tài khoản chưa đăng ký');
    case 'signout':
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);

}
