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
				dummy textfsdfsdf"; // ������  string �� ����
		echo $str2.$str;	// ���� ���
		echo strlen($str);//�ؽ�Ʈ�� �迭�� ����
	?>
	<h2>nl2br</h2>
	<?php
		echo nl2br($str);
		echo nl2br($str2);
		echo $str2.$str;
	?>
</body>
</html>