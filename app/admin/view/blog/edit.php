<?php
session_start();
if(empty($_SESSION['id'])){
    header('Location:index.php?error=Chưa đăng nhập');
}
?>
<form action="?controller=blog&action=update" method="post">
 
        <input type="hidden" name="id" value="<?php echo $blog_details['id'] ?>">
        Image
        <input type="text" name="img" value="<?php echo $blog_details['img']?>">
        <br>
        Content
        <input type="text" name="content" value="<?php echo $blog_details['content']?>">
        <br>
        Title
        <input type="text" name="title" value="<?php echo $blog_details['title']?>">
        <br>
        <button>Edit</button>
    </form>