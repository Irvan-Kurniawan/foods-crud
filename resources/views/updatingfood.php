<?php
error_reporting(E_ALL & ~E_NOTICE);
if (!isset($_COOKIE['login'])){
echo '<script> alert("You have not logon yet"); </script>';
	echo '<script> window.location.replace("/", "_self"); </script>';
}

require __DIR__.'\connection.php';
$name = $_GET['name'];
$description = $_GET['description'];
$id = $_GET['id'];

$sql = "UPDATE m_foods SET name='$name',description='$description' WHERE id=$id";
// var_dump($_POST);
// echo ($sql);
echo "Loading...";
// echo "$sql";
if ($connection->query($sql)) {
    echo '<script> document.cookie = "login=true"; window.location.href="/foods"; </script>';
} else {
    echo "Error Updating food";
}
?>