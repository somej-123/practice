<?php
    unlink('reviewData/'.$_POST['id']);
    header('location:review.php');
?>