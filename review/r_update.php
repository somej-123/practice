<?php
    require('lib/print.php');
    require('lib/header.php');
?>
    <!-- 내용 끝 -->
    <!-- create.php -->
    <button onclick="window.open('r_create.php','_self')">생성</button>
    <br>
    <form action="r_update_process.php" method="POST">
    <input type='hidden' value="<?=review_main_title()?>" name="old_title">
    <label for="title">제목 : <input type="text" name="title" style="margin-bottom:30px;" value="<?=review_main_title()?>"/></label>
    <br>
    <label for="content">내용 : 
        <textarea name="content" style="width:200px; height:100px;"><?=review_list_contents()?></textarea>
    </label>
    <br>
    <button type="submit">수정</button>
    </form>
    <form action="r_delete_process.php" method="POST">
        <input type='hidden' name="id" value="<?=$_GET['id']?>"/>
        <button type='submit'>삭제</button>
    </form>
    <!-- create.php끝-->
<?php
    require('lib/footer.php');
?>