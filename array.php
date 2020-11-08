<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
        $coworks = array('egoing','leezche','duru','teaho');
        $coworks2 = ['egoing2','leezche2','duro2','teaho2'];

        echo $coworks[1].'<br>';
        echo $coworks2[1]."<br>";
        var_dump(count($coworks));
        echo '<br>';
        array_push($coworks,'hi');
        var_dump($coworks);
        unset($coworks[0]);
        echo "<br>";
        var_dump($coworks);
    ?>
</body>
</html>