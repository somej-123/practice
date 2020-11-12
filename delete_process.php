<?php
    unlink('data/'.$_POST['id']);
    header("location:create.php");
?>