<?php
    rename('reviewData/'.$_POST['old_title'],'reviewData/'.$_POST['title']);
    file_put_contents('reviewData/'.$_POST['title'],$_POST['content']);
    header('location:r_update.php?id='.$_POST['title']);
?>