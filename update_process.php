<?php
    rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']);
    file_put_contents('data/'.$_POST['title'].'.php', $_POST['description']);
    header('Location:create.php?id='.$_POST['title'].'.php');
?>