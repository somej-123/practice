<?php
    file_put_contents('reviewData/'.$_POST['title'],$_POST['content']);
    header("Location:review.php?id=".$_POST['title']);
?>