<?php 
$dogslistJson=file_get_contents('https://dog.ceo/api/breeds/list/all');
$doglistObj=json_decode($dogslistJson);
$doglist=$doglistObj->list;

?>
<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dogs List</title>
</head>
<body>
<h1>DOGS LIST</h1>
<dl></dl>
<dt>Message:</dt>
<dd><?php echo $doglist->list;?></dd>

</body>
</html>
