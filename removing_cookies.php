<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

setcookie ("CouponNumber", "", time ()-1);
setcookie ("CouponValue", "", time ()-1);
print ("<pre><br>");
print ("2 cookies were delivered with past times.<br>");

$count = count ($_COOKIE);
print("$count cookies received.<br>");
foreach ($_COOKIE as $name => $value) 
{ 
    print " $name = $value.<br>";
}
print ("</pre><br>");

?>
</body>
</html>