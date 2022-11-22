<?
$name = $_GET['username'];
if($name=="admin"){
	if($name!="admin"){
		echo $name;
	}
}
else
	echo "user";
?>