<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'iwt') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$name = '';
$Comment = '';


if (isset($_POST['save'])){
    $name = $_POST['name'];
    $Comment = $_POST['Comment'];

    $mysqli->query("INSERT INTO comments(name,Comment) VALUES('$name','$Comment')") or
    die($mysqli->error);

    $_SESSION['message'] = "comment added to the database";
    $_SESSION['msg_type'] = "added";

    header("location: post_comment.php");

}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM comments WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "comment is deleted";
    $_SESSION['msg_type'] = "error";

    header("location: post_comment.php");

}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM comments WHERE id=$id") or die($mysqli->error());
    $update = true;
    if(count($result)==1){
        $row = $result->fetch_array();
        $name = $row['name'];
        $Comment = $row['Comment'];
        
    }

}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $Comment = $_POST['Comment'];
  

    $mysqli->query("UPDATE data SET name='$name', Comment='$Comment' WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "comment is updated";
    $_SESSION['msg_type'] = "error";

    header('location: post_comment.php');
}


?>