<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
require_once('Vehicle.php');
require_once('Tunning.php');
$prout=new Vehicle('rose',200,60);
$prout->toHTML();
$prout=new Tunning();
$prout->toHTML();
?>
</body>
</html>