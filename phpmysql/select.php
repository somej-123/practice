<?php
    $conn = mysqli_connect('127.0.0.1','somej','sns5sms!','mydb');

    $sql = " SELECT * FROM topic ";

    $result = mysqli_query($conn,$sql);

    echo var_dump($result->num_rows)."<br>";
    
        while($rows = mysqli_fetch_assoc($result)){
        echo "<li>".$rows['index']."</li>";
        echo "<li>".$rows['title']."</li>";
        echo "<li>".$rows['description']."</li>";
        echo "<li>".$rows['created']."</li>";
    };
?>