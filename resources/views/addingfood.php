<?php
error_reporting(E_ALL & ~E_NOTICE);
if (!isset($_COOKIE['login'])){
echo '<script> alert("You have not logon yet"); </script>';
	echo '<script> window.location.replace("/", "_self"); </script>';
}

require __DIR__.'\connection.php';
$name = $_GET['name'];
$description = $_GET['description'];


$sql = "INSERT INTO m_foods(name, description) VALUES('$name','$description')"; 

echo "Loading...";
echo "$sql";
if ($connection->query($sql)) {
    echo '<script> document.cookie = "login=true"; window.location.href="/foods"; </script>';
} else {
    echo "Error Adding food";
}
?>