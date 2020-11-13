<?php
    if(isset($_POST['title']) == '.'){
    $_POST['title'] = str_replace('.',$_POST['title']);
    file_put_contents('reviewData/'.$_POST['title'],$_POST['content']);
    }else{
    file_put_contents('reviewData/'.$_POST['title'],$_POST['content']);
    }
    header("Location:review.php?id=".$_POST['title']);
?>