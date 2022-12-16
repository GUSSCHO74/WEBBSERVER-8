<?php
    include "database.php";

    $name = $_POST["name"];
    $comment = $_POST["comment"];
    $sql = "INSERT INTO Guestbook (name, comment, time) VALUES (?, ?, now())";
    $prepare = $conn->prepare($sql);
    $prepare->bind_param("ss", $name, $comment);
    
    $prepare->execute();

    header("Location: posts.php");
    die();
?>