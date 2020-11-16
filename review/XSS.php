<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>XSS</title>
    </head>
    <body>
        <h1>Cross site scrtipting</h1>
    <?php
    echo htmlspecialchars('<script>alert("babo");</script>'."\n");
    echo strip_tags("<p><a href=\"#\">인사 오지게 박습니다.</a></p>", "<p>");
    ?>
    </body>
</html>