<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>Document</title>
</head>
<body>
    <a href="index.php">돌아가기</a>
<?php
    
    file_put_contents("data/".$_POST['title'].".php",$_POST['content']);
?>
<script>
    alert("생성되었습니다.");
</script>
</body>
</html>