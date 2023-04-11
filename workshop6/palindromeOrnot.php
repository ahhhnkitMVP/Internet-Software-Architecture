<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $a="dad";
  $rev=strrev($a);
  if($a==$rev)
    echo "It is a palindrome.";
  else
    echo "It is not a palindrome.";
  ?>  
</body>
</html>