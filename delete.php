<?php
require_once "config.php";
require_once "functions.php";
$id = $_GET['id'];
$sql = "DELETE FROM oglasi WHERE id = '$id'";
$query = mysqli_query(db(), $sql);
if ($query){
    header("Location: index.php");
}
