<?php
    // var_dump($_POST);
    $conn = mysqli_connect('127.0.0.1','somej','sns5sms!','mydb');
    //첫번째 인자는 데이터 서버의 주소, 두번째 인자는 데이터 베이스 사용자, 세번째는 데이터 베이스 사용자 비밀번호, 네번째는 데이터베이스 이름
    $sql = "
        INSERT INTO topic
        (title, description, created)
        VALUES(
            '{$_POST['title']}',
            '{$_POST['description']}',
            NOW())";
    // $sql 변수에다가 쿼리문을 담는다. 토픽이라는 데이터 베이스 안에 title(제목), description(본문), created(시간)
    //values = 포스트로 받은 title, description 그리고 마지막 현재시간을 나타내는 now()
    // echo $sql;
    $result = mysqli_query($conn,$sql);
    //제대로 들어가게 되면 true반환을 오류가 있으면 false를 나타내고 $result값에 저장한다.
    if($result == false){
        //만약 $result 변수에 false 값이 들어간다면
        echo '저장하는 과정에서 문제가 생겼습니다.';
        //쿼리문에 어떤 오류가 났는지 알려주는 구문을 적는다.
        error_log(mysqli_error($conn));
        //C:\AutoSet10\server\logs 이곳에 에러를 기록해둔다.
    }else{
        echo '<script>alert("성공했습니다.");</script>';
        header('Location:index.php');
    }
    // echo $sql;
    /*
        데이터베이스 접속, 데이터베이스 선택, mysqli_query를 통해 쿼리를 실행하는 것까지가 하나의 세트이다.
        다시 process_create.php로 와서 다음과 같이 코드를 작성한다.
    */
?>