<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>function</h1>
	<?php
		$str2 = "sdfdsf";
		$str = "Lorem Ipsum is simply
				dummy textfsdfsdf"; // 변수에  string 값 저장
		echo $str2.$str;	// 변수 출력
		echo strlen($str);//텍스트의 배열의 길이
	?>
	<h2>nl2br</h2>
	<?php
		echo nl2br($str);
		echo nl2br($str2);
		echo $str2.$str;
	?>
</body>
</html>