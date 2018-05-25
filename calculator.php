<html>
<head>
	<title></title>
</head>
<body>
<?php
function addNums($firstnum,$secondnum){
	$result = $firstnum + $secondnum;
	return $result;
}
function subNums($firstnum,$secondnum){
	$result = $firstnum - $secondnum;
	return $result;
}
function mulNums($firstnum,$secondnum){
	$result = $firstnum * $secondnum;
	return $result;
}
function divNums($firstnum,$secondnum){
	$result = $firstnum / $secondnum;
	return $result;
}
function modNums($firstnum,$secondnum){
	$result = $firstnum % $secondnum;
	return $result;
}
switch($_GET['math']){
	case 'add':
		echo addNums($_GET['first'],$_GET['second']);
		break;
	case 'subtract':
		echo subNums($_GET['first'],$_GET['second']);
		break;
	case 'multiply':
		echo mulNums($_GET['first'],$_GET['second']);
		break;
	case 'divide':
		echo divNums($_GET['first'],$_GET['second']);
		break;
	case 'modulus':
		echo modNums($_GET['first'],$_GET['second']);
		break;
}
?>
</body>
</html>