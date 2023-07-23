<?php
session_start();
if(empty($_SESSION['id'])){
    header('Location:index.php?error=Chưa đăng nhập');
}else{
    echo "hello," . $_SESSION['email'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="?action=signout">Sign Out</a>
<br>
<a href="?controller=blog&action=create">Create</a>
    <table border="1" width="100%">
        <tr>
            <th>#</th>
            <th>Img</th>
            <th>Content</th>
            <th>Title</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach ($result_blog as $blog){ ?>
        <tr>
            <td><?php echo $blog['id']?></td>
            <td><?php echo $blog['img']?></td>
            <td><?php echo $blog['content']?></td>
            <td><?php echo $blog['title']?></td>
            <td>
                <a href="?controller=blog&action=edit&id=<?php echo $blog['id']?>">Edit</a>
            </td>
            <td>
                <a href="?controller=blog&action=delete&id=<?php echo $blog['id']?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>