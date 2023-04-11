<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function isArmstrong($number) {
        $sum = 0;
        $digits = strval($number);
        $numDigits = strlen($digits);
        
        for ($i = 0; $i < $numDigits; $i++) {
          $digit = intval($digits[$i]);
          $sum += pow($digit, $numDigits);
        }
        
        return $sum == $number;
      }
      $number = 153;
if (isArmstrong($number)) {
  echo "$number is an Armstrong number";
} else {
  echo "$number is not an Armstrong number";
}

      
    ?>
</body>
</html>