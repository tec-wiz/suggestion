<?php

$date=$_POST['date'];
$change_date=date("d-m-Y",strtotime($date));
echo $change_date; 
$bill=$_POST['bill'];
$vendor=$_POST['vendor'];
$gst=$_POST['gst'];
$price=$_POST['price'];
$data=$date.",".$bill.",".$vendor.",".$gst.",".$price;


$file="file.csv";


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
print "<h1 align=center>Thank you for submitting your email address!</h1>";


?>
<html>
<head>
<title>ThankYou Page</title>    
</head>
<body>
<h1><a href="index.html">GO BACK</a> </h1>    
    
</body>




</html>