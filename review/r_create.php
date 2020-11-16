<?php
    require_once('lib/print.php');
    require_once('lib/header.php');
?>
    <!-- 내용 끝 -->
    <!-- create.php -->
    <button onclick="window.open('r_create.php','_self')">생성</button>
    <br>
    <form action="r_create_process.php" method="POST">
    <label for="title">제목 : <input type="text" name="title" placeholder="제목을 입력해주세요"style="margin-bottom:30px;"/></label>
    <br>
    <label for="content">내용 : 
        <textarea name="content" placeholder="내용을 입력해주세요" style="width:200px; height:100px;"></textarea>
    </label>
    <button type="submit">생성</button>
    </form>
    <!-- create.php끝-->
<?php
    require_once('lib/footer.php');
?>