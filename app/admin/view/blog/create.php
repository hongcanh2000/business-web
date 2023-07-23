<?php
session_start();
if(empty($_SESSION['id'])){
    header('Location:index.php?error=Chưa đăng nhập');
}
?>
    <form action="?controller=blog&action=store" method="post">
        Image
        <input type="text" name="img">
        <br>
        Content
        <input type="text" name="content">
        <br>
        Title
        <input type="text" name="title">
        <br>
        <button>Create</button>
    </form>