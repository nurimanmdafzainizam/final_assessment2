<?php
include 'db.php';
include 'auth.php';

if(isset($_POST['delete'])){
    $id = (int)$_POST['delete'];

    $sql = $conn ->prepare("DELETE FROM result WHERE number = ?");
    $sql->bind_param("i", $id);

    if ($sql->execute()){
        header("Location: index.php");
        exit;
    }
}

header("Location: index.php");
exit;
?>