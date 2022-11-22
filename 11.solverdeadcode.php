<?
$name = $_GET['username'];
$p = $_GET['p'];
$q = $_GET['q'];
$r = $_GET['r'];

if(is_int($p)&&is_int($q)&&is_int($r)){
	if(pow($r,3)==pow(p,3)+pow(q,3)){
		echo $name;
	}
}
else
	echo "user";
?>