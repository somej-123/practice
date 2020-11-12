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
    <!-- 내용 끝 -->
    <!-- create.php -->
    <button onclick="window.open('r_create.php','_self')">생성</button>
    <!-- create.php끝-->
    <!-- 함수 부분 -->
    <?php
        function review_main_title(){
            if(isset($_GET['id'])){
                echo $_GET['id'];
            }else{
                echo "리뷰 홈페이지";
            }
        }
        function review_list(){
            $list=scandir('./reviewData');
            $i=0;
            while($i < count($list)){
            if($list[$i] != '.'){
                if($list[$i] != '..'){
                    echo "<li><a href=\"review.php?id=$list[$i]\">$list[$i]</a></li>";
                }
            }
            $i++;
            }
        }
        function review_list_title(){
            if(isset($_GET['id'])){
                echo $_GET['id'];
            }else{
                echo "리스트를 클릭해주세요";
            }
        }
        function review_list_contents(){
            if(isset($_GET['id'])){
                echo file_get_contents('reviewData/'.$_GET['id']);
            }else{
                echo "Review페이지에 온걸 환영합니다.";
            }
        }
    ?>
    <!-- 함수 부분 끝 -->
</body>
</html>