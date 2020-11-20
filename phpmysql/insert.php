<?php
    // $mysql = mysqli_connect("example.com", "user", "password", "database");
    // $res = mysqli_query($mysql, "SELECT 'please, do not use' AS _msg FROM DU-AL");
    // $row = mysqli_fetch_assoc($res);
    // echo $row['_msg'];
    $conn = mysqli_connect("127.0.0.1", "root", "autoset", "myDB");
    
    /*mysqli_query($conn,"
        INSERT INTO topic(
            title,
            description,
            created
            )
            VALUES(
                'MYSQL',
                'MYSQL is ....',
                NOW()
                
    )");*/
    
    $sql = "
            INSERT INTO topic(
            title,
            description,
            created
            ) VALUES(
            'Mysql',
            'Mysql is....',
            NOW()
            )";
    
    $result = mysqli_query($conn,$sql);
    if($result == false)
    echo mysqli_error($conn);// mysqli_error() 에러를 html화면상 볼 수 있는 메소드
        
?>