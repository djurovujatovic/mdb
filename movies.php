<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
header('Content-Type: text/plain');
$csv = file_get_contents('movies.csv');
echo $csv;
?>

</body>
</html>