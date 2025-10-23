<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$povolene_adresy=["/jedna","/dva","/tri","/ctyri","/pet","/sest","/sedm","/osm","/devet","/deset"];
$URL=$_SERVER["REQUEST_URI"];

if (in_array($URL,$povolene_adresy))

{
  echo "Ahoj";
}
?>



</body>
</html>