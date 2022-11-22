<?
$name = $_GET['username'];
if($name=="admin"){
	echo "hello";
}
else
	echo "<script>".$name."</script>";
?>