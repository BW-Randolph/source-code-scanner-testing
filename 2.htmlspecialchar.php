<?
$name = $_GET['username'];
$name = htmlspecialchars($name);
if($name=="admin"){
	echo "hello";
}
else
	echo "hello".$name;
?>