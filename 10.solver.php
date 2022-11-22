<?
$name = $_GET['username'];
$id = $_GET['id'];

if($id<2147483648){
	if($id>2147483646){
		echo $name;
	}
}
else
	echo "user";
?>