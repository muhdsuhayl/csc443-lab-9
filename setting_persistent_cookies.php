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

setcookie ("myLoginName", "myWebsite");
setcookie ("myPreferredColor", "Blue");
setcookie ("CouponNumber", "07470433", time() +60*60*24*7); setcookie ("CouponValue", "100.00", time () +60*60*24*7);

print ("<br>");
print ("2 temporary cookies were delivered.<br>"); 
print ("2 consistent cookies were delivered.<br>");

if (isset($_COOKIE ["myLoginName"])) 
{
    $loginName = $_COOKIE ["myLoginName"];
    print("Received a cookie named as myLoginName: ".$loginName."<br>"); 
} else 
{ 
    print("Did not received any cookie named as myLoginName.<br>");
}

$count = count ($_COOKIE);
print ("Scount cookies received.<br>"); 
foreach ($_COOKIE as $name => $value)
{ 
    print " $name = $value<br>";
}
print ("<br>");

?>  
</body>
</html>