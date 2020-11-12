<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title>
		<?php
			print_title();
		?>
	</title>
</head>
<body>
	<h1><a href="create.php">WEB</a></h1>
	<ol>
		<?php
				print_list();
			/*$list = scandir('data');//scandir(string $directory)함수는 지정된 경로 내의 파일과 디렉토리를 나열한다.
									//direcory에서 파일 및 디렉토리의 배열을 반환한다.
									//$list라는 변수에 값을 저장한다.
			$i = 0; 				//변수i에 0숫자 저장
			while($i<count($list)){//몇 개의 값을 가지고 있는지 구해야 하는 경우 배열의 개수를 반환하는 함수 count()를 사용할 수 있다. count()함수를 사용하면 해당하는 배열이 몇 개의 값을 가지고 있는지 계산하여 숫자로 반환한다.array.length라고 보면 될 것 같음
				if($list[$i] != '.'){
					if($list[$i] != '..'){
						?>
						<li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
						<?php
					}
				}
					$i = $i + 1;
			}*/
			?>
	</ol>
	<h2>
		<?php
			print_title();
			// if(isset($_GET['id'])){//제목있는 부분 isset()은 jquery is()함수와 똑같은 역할을 한다.
			// 					   //url에 id값이 있다면
			// 	echo $_GET['id'];  //h2있는 부분에 해당 id를 출력해준다. 예) CSS.php
			// }else{				   //만약 id에 값이 없다면
			// 	echo "welcome";	   //welcome이라는 문자열을 출력해준다.
			// }
		?>
	</h2>
	<p>
		<?php
			print_description();
		// if(isset($_GET['id'])){    //만약 url에 id값이 존재한다면
		// 	echo file_get_contents("data/".$_GET['id']); //data안에 url에 해당하는 파일의 내용을 불러와준다. get_file_contents()함수는 전체파일을 문자열로 읽어들이는 php함수이다, 로컬파일, 원격파일 모두 가능하다.
		// }else{//만약 url에 아무런 값이 없다면
		// 	echo "welcom to php";//내용을 출력한다.
		// }
		?>
	</p>
	<a href="create.php">create</a>
	<?php
		if(isset($_GET['id'])){?><!--만약 url->id안에 값이 있다면
		-->
			<a href="update.php?id=<?=$_GET['id'];?>">Update</a><!--경로 태그를 추가해준다.(이것만 html태그로 작성)-->
		<?php } ?><!--php로 시작했기 때문에 php로 끝나야 한다.-->
	<form action="update_process.php" method="post">
		<input type="hidden" name="old_title" value="<?= $_GET['id']?>"/>
		<p>
			<input type="text" name="title" placeholder="Title" value="<?php print_title() ?>"/>
		</p>
		<p>
			<textarea name="description" style="min-width:700px; min-height:100px"><?php print_description() ?></textarea>
		</p>
		<p>
			<input type="submit" value="만들기"/>
		</p>
	</form>
	<?php
		function print_title(){
			if(isset($_GET['id'])){
				echo $_GET['id'];
			}else{
				echo 'welcome';
			}
		}
		function print_list(){
			$list = scandir('./data');
			$i = 0;
			while($i < count($list)){
				if($list[$i] != '.'){
					if($list[$i] != '..'){
						echo "<li><a href=\"create.php?id=$list[$i]\">$list[$i]</a></li>";
					}
				}
				$i++;
			}
		}
		function print_description(){
			if(isset($_GET['id'])){
				echo file_get_contents("data/".$_GET['id']);
			}else{
				echo "welcome to PHP";
			}
		}
	?>
</body>
</html>
