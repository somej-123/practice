<?php
        $conn = mysqli_connect('127.0.0.1','somej','sns5sms!','mydb');

        $sql = "SELECT * FROM topic";

        $result = mysqli_query($conn,$sql);
        if($result == false){
            echo "<script>alert('오류가 생겼습니다.')</script>";
        };
        $list = '';//변수 초기화

        while($row = mysqli_fetch_array($result)){
            $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
        }
    ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP와 MYSQL서버 연동</title>
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <?=$list?>
    </ol>
    <a href="create.php">create</a>
    <a href="select.php">목록</a>
    <h2>Welcome</h2>
    Lorem ipsum dolor sit amet, consectertur adipisicing elit,
</body>
</html>