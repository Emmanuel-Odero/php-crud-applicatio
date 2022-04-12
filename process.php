<?php
$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
if (isset($_POST['save'])) {
    # code...
    $name = $_POST['name'];
    $location = $_POST['location'];
    $mysqli->query("INSERT INTO data (name, location) VALUES('$name', '$location')") or die($mysqli->error);
}
?>