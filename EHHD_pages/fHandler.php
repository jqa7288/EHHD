<?php

$cName = $_POST['fName'];
$cPhone = $_POST['pNumber'];
$cEmail = $_POST['emailAddr'];
$cComments = $_POST['comments'];
$message = sprintf("Appointment request from: %s\n Phone: %s\nEmail: %s\nComments: %s", $cName, $cPhone, $cEmail, $cComments);
mail('j_quick@outlook.com', 'Appointment Request!', $message);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thanks!</title>
<link rel="stylesheet" type="text/css" href="services_style.css">
</head>

<body>
<h1 style="font-family: EmScript; font-size: 50px; color: white; text-align: center; position: relative; top: 100px;">Thanks! Your request was sent and you should receive a response promptly.</h1> 

<a id="backer" href="index.html">Back to Main</a>

</body>
</html>
