 <!-- 함수 부분 -->
 <?php
        function review_main_title(){
            if(isset($_GET['id'])){
                echo $_GET['id'];
            }else{
                echo "리뷰 홈페이지";
            }
        }
        function review_list(){
            $list=scandir('./reviewData');
            $i=0;
            while($i < count($list)){
            if($list[$i] != '.'){
                if($list[$i] != '..'){
                    echo "<li><a href=\"r_update.php?id=$list[$i]\">$list[$i]</a></li>";
                }
            }
            $i++;
            }
        }
        function review_list_title(){
            if(isset($_GET['id'])){
                echo $_GET['id'];
            }else{
                echo "리스트를 클릭해주세요";
            }
        }
        function review_list_contents(){
            if(isset($_GET['id'])){
                echo file_get_contents('reviewData/'.$_GET['id']);
            }else{
                echo "Review페이지에 온걸 환영합니다.";
            }
        }
    ?>
    <!-- 함수 부분 끝 -->