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
        <li>HTML</li>
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