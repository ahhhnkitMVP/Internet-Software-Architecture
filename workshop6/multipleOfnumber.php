<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $result=1;
    $num=5;
    for($i=1; $i<=10; $i++){
        $result=$num*$i;
        echo "$num * $i = $result <br>";
    }
    ?>
</body>
</html>