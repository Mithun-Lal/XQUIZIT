
<?php
if(!isset($_SESSION["userid1"])) {
$url="http://xquizit.conjura.in";
header('Location:'.$url);
} else {
echo "Value is: " . $_SESSION["userid1"]."</br>";
}
?>
