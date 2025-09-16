<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    // Get photo filename before deleting the record
    $sql = "SELECT foto FROM game WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $foto = $row['foto'];
    
    // Delete the record
    $sql = "DELETE FROM game WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        // Delete the photo file
        if($foto && file_exists('foto/'.$foto)){
            unlink('foto/'.$foto);
        }
        header("Location: test.php");
        exit();
    } else {
        header("Location: test.php");
        exit();
    }
}

// If no ID is set, redirect back to test.php
header("Location: test.php");
exit();
?>