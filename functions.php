<?php
require_once "config.php";
session_start();
function db(){
    $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die("Error");
    return $conn;
}

function dd($val){
    echo "<pre>";
        die(var_dump($val));
    echo "</pre>";
}

function logUser($user){
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    header('Location: oglasi.php');
}

function getAll(){
    $sql = "SELECT oglasi.id, oglasi.user_id, oglasi.title, oglasi.category, oglasi.price, oglasi.text, users.name FROM oglasi
            INNER JOIN users
            ON oglasi.user_id = users.id";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

function get_all_user_ads($id){
    $sql = "SELECT oglasi.id, oglasi.user_id, oglasi.title, oglasi.category, oglasi.price, oglasi.text, users.name FROM oglasi
            INNER JOIN users
            ON oglasi.user_id = users.id
            WHERE oglasi.user_id = '$id'";

    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

function getCategory(){
    $sql = "SELECT * FROM categories";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;

}

function getOne($id){
    $sql = "SELECT oglasi.id, oglasi.user_id, oglasi.title, oglasi.category, oglasi.price, oglasi.text, users.name FROM oglasi
            INNER JOIN users
            ON oglasi.user_id = users.id
            WHERE oglasi.id = '$id'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_assoc($query);
    return $result;
}

function getCat($cat){
    $sql = "SELECT oglasi.id, oglasi.user_id, oglasi.title, oglasi.category, oglasi.price, oglasi.text, users.name FROM oglasi
            INNER JOIN users
            ON oglasi.user_id = users.id
            WHERE oglasi.category = '$cat'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

function getUserAdds($name){
    $sql = "SELECT oglasi.id, oglasi.user_id, oglasi.title, oglasi.category, oglasi.price, oglasi.text, users.name FROM oglasi
            INNER JOIN users
            ON oglasi.user_id = users.id
            WHERE users.name = '$name'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

function getPrice($price){
    $sql = "SELECT oglasi.id, oglasi.user_id, oglasi.title, oglasi.category, oglasi.price, oglasi.text, users.name FROM oglasi
            INNER JOIN users
            ON oglasi.user_id = users.id
            WHERE oglasi.price = '$price'";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

function manje5k(){
    $sql = "SELECT oglasi.id, oglasi.user_id, oglasi.title, oglasi.category, oglasi.price, oglasi.text, users.name FROM oglasi
            INNER JOIN users
            ON oglasi.user_id = users.id
            WHERE oglasi.price < 5000";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

function petKdo10k(){
    $sql = "SELECT oglasi.id, oglasi.user_id, oglasi.title, oglasi.category, oglasi.price, oglasi.text, users.name FROM oglasi
            INNER JOIN users
            ON oglasi.user_id = users.id
            WHERE oglasi.price >= 5000 AND oglasi.price <= 10000";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}

function vece10k(){
    $sql = "SELECT oglasi.id, oglasi.user_id, oglasi.title, oglasi.category, oglasi.price, oglasi.text, users.name FROM oglasi
            INNER JOIN users
            ON oglasi.user_id = users.id
            WHERE oglasi.price > 10000";
    $query = mysqli_query(db(), $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $result;
}
