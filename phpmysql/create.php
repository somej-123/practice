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

        $article = array(//id 값이 없을때는 key와 value값을 직접 넣어 설정해준다.
            'title'=>'welcome',
            'description'=>'hello, web'
        );

        if(isset($_GET['id'])){
        $sql = "SELECT * FROM topic WHERE id={$_GET['id']}"; // id 값이 바뀜에 따라 SQL문이 자동으로 생성된다. 이를 MySQL서버로 전송해야 한다.
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $article['title'] = $row['title'];
        $article['description'] = $row['description'];
        }
        //print_r($article);//$article이라는 변수 출력
    
    ?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP와 MYSQL서버 연동</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?=$list?>
    </ol>
    <a href="index.php">홈으로 돌아가기</a>
    <a href="select.php">목록으로 돌아가기</a>
    <form action="process_create.php" method="POST">
        <p>
            <input type="text" name="title" placeholder="title"/>
        </p>
        <p>
            <textarea name="description" placeholder="description"></textarea>
        </p>
        <p><input type="submit"/></p>
    </form>
</body>
</html>