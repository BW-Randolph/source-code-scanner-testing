<?
$name = $_GET['username'];
$name = htmlentities($name);
if($name=="admin"){
	echo "hello";
}
else
	echo "<script>".$name."</script>";
?>