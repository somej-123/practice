<?php
    $conn = mysqli_connect('127.0.0.1','somej','sns5sms!','mydb');

    echo "<h1>Single row</h1>";
    $sql = " SELECT * FROM topic";

    $result = mysqli_query($conn,$sql);
    if($result == false){
        echo "<script>alert('문제가 생겼습니다')</script>";
        error_log($conn);
    }

    // $row = print_r(mysqli_fetch_array($result));//print_r : php변수 정보 출력(배열포함)

    while($row = mysqli_fetch_array($result)){
        echo '<h2>'.$row['title'].'</h2>';
        echo $row['description'];
    };//print_r : php변수 정보 출력(배열포함)

    // echo var_dump($result->num_rows)."<br>";

    // echo '<h2>'.$row['title'].'</h2>';
    // echo $row['description'];

    // $row = mysqli_fetch_array($result);
    // echo '<h2>'.$row['title'].'</h2>';
    // echo $row['description'];
    
    // $row = mysqli_fetch_array($result);
    // echo '<h2>'.$row['title'].'</h2>';
    // echo $row['description'];

    // $row = mysqli_fetch_array($result);
    // echo '<h2>'.$row['title'].'</h2>';
    // echo $row['description'];

    // $row = mysqli_fetch_array($result);
    // echo '<h2>'.$row['title'].'</h2>';
    // echo $row['description'];
    // echo "<br>";
    
    // $row = mysqli_fetch_array($result);
    // echo "<br>".var_dump($row);

    
?>