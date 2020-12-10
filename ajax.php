<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <title>Document</title>
</head>
<body>
    <button type="button" id="Btn">버튼</button>
    <p id="text">안녕하세요</p>
    <script>
        $(document).ready(function(){
            $("#Btn").click(function(){
                $.ajax({
                url: "/hello.html",
                type: "get",
                dataType: "html",
                data: "",
                success: function(data){
                    $("#text").load("hello.html");
                },

                error: function (request, status, error){       
                    alert("실패했습니다.") 
                }
                });
            })
        });
       
    </script>
</body>
</html>