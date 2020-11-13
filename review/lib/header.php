<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
            review_main_title();
        ?>
    </title>
</head>
<body>
    <h1><a href="review.php">Review</a></h1><!--메인 로고-->
    <!-- 리스트 부분 -->
    <ol>
    <?php
        review_list();
    ?>
    </ol>
    <!-- 리스트 부분 끝 -->
    <!-- 부제목 입력 -->
    <h2>
        <?php
           review_list_title();
        ?>
    </h2>
    <!-- 부제목 끝 -->
    <!-- 내용 -->
    <p>
        <?php
            review_list_contents();
        ?>
    </p>