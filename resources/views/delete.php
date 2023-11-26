<?php

error_reporting(E_ALL & ~E_NOTICE);
if (!isset($_COOKIE['login'])){
echo '<script> alert("You have not logon yet"); </script>';
	echo '<script> window.location.replace("/", "_self"); </script>';
}

require __DIR__.'\connection.php';
$id = $_GET['id'];


$sql = "DELETE FROM m_foods WHERE id = $id"; 

echo "Loading...";

if (mysqli_query($connection, $sql)) {
    echo '<script> document.cookie = "login=true"; window.location.href="/foods"; </script>';
} else {
    echo "Error deleting food";
}
?>