<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1><a href="index2.php">WEB</a></h1>
	<ol>
		<?php
			$list = scandir('./data');
			$i = 0;
			while($i<count($list)){//data폴더에 있는 모든 값을 배열로 출력 하고 $i와 비교한다. $i가 data파일의 배열보다 작을 경우
				if($list[$i] != '.'){//만약 $list[$i]의 값이 .와 같지 않다면 ture 거짓이면 false이다. 하지만 우리가 원하는 것은 . .. 을 건너가야하므로 일부로 false값을 주어 i의 값을 상승시킨다.
					if($list[$i] != '..'){//위와 같음
						echo "<li><a href=\"index2.php?id=$list[$i]\">$list[$i]</a></li>\n";//<li><a href="index2.php?id=CSS.php">CSS.php</a></li>가 소스에 출력됨
					}
				}
				$i++;
			}
			/*
			echo "<li>$list[0]</li>";
			echo "<li>$list[1]</li>";
			echo "<li>$list[2]</li>";
			echo "<li>$list[3]</li>";
			echo "<li>$list[4]</li>";
			echo "<li>$list[5]</li>";
			echo "<li>$list[6]</li>";
			*/
		?>
	</ol>
	<h2>
		<?php
			if(isset($_GET['id'])){//제목있는 부분 isset()은 jquery is()함수와 똑같은 역할을 한다.
								   //url에 id값이 있다면
				echo $_GET['id'];  //h2있는 부분에 해당 id를 출력해준다. 예) CSS.php
			}else{				   //만약 id에 값이 없다면
				echo "welcome";	   //welcome이라는 문자열을 출력해준다.
			}
		?>
	</h2>
	<p>
		<?php
		if(isset($_GET['id'])){    //만약 url에 id값이 존재한다면
			echo file_get_contents("data/".$_GET['id']); //data안에 url에 해당하는 파일의 내용을 불러와준다. get_file_contents()함수는 전체파일을 문자열로 읽어들이는 php함수이다, 로컬파일, 원격파일 모두 가능하다.
		}else{//만약 url에 아무런 값이 없다면
			echo "welcom to php";//내용을 출력한다.
		}
		?>
	</p>
</body>
</html>
