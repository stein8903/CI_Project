<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php

foreach ($results as $key => $value) {
    echo $value->user_name;
    echo "<br>";
}
?>
</body>
</html>