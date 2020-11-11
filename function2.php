<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
        function basic(){
            print("아무글이나 적는다.<br>");
            print("아무글이나 적는다2");
        }
        basic();
    ?>
    <h2>parameter &amp argument</h2>
    <?php
        function sum($left,$right){
            print($left + $right);
            print("<br>");
        }
        sum(2,3);

        function sum2($left2, $right2){
            $result = $left2 + $right2;
            return $result;
        }
        file_put_contents("result.txt", sum2(2,4));
    ?>
</body>
</html>
