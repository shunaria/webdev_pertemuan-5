<?php
include 'db.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $genre = $_POST['genre'];
    $player = $_POST['player'];
    $susah = $_POST['susah'];
    
    // Handle file upload
    $foto = $_FILES['foto']['name'];
    $temp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($temp, 'foto/'.$foto);
    
    // Find the lowest available ID
    $sql = "SELECT id FROM game ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);
    $used_ids = [];
    while($row = mysqli_fetch_assoc($result)) {
        $used_ids[] = $row['id'];
    }
    
    $new_id = 1;
    while(in_array($new_id, $used_ids)) {
        $new_id++;
    }
    
    // Insert with the new ID
    $sql = "INSERT INTO game (id, nama, genre, player, foto, susah) 
            VALUES ($new_id, '$nama', '$genre', '$player', '$foto', '$susah')";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        header("Location: test.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Game</title>
</head>
<body>
    <h2>Tambah Data Game</h2>
    <form method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="genre">Genre :</label>
                <input type="text" name="genre" id="genre" required>
            </li>
            <li>
                <label for="player">Player :</label>
                <input type="text" name="player" id="player" required>
            </li>
            <li>
                <label for="foto">Foto :</label>
                <input type="file" name="foto" id="foto" required accept="image/jpeg">
            </li>
            <li>
                <label for="susah">Susah :</label>
                <input type="text" name="susah" id="susah" required>
            </li>
            <br>
            <button type="submit" name="submit">Tambah Data!</button>
        </ul>
    </form>
    <a href="test.php"><button type="button">Kembali</button></a>
</body>
</html>