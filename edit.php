<?php
include 'db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM game WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $genre = $_POST['genre'];
    $player = $_POST['player'];
    $susah = $_POST['susah'];
    $foto_lama = $_POST['foto_lama'];
    
    if($_FILES['foto']['name']){
        $foto = $_FILES['foto']['name'];
        $temp = $_FILES['foto']['tmp_name'];
        move_uploaded_file($temp, 'foto/'.$foto);
        
        // Delete old photo
        if($foto_lama && file_exists('foto/'.$foto_lama)){
            unlink('foto/'.$foto_lama);
        }
    } else {
        $foto = $foto_lama;
    }
    
    $sql = "UPDATE game SET nama='$nama', genre='$genre', player='$player', foto='$foto', susah='$susah' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        echo "<script>alert('Data Berhasil Diubah'); window.location='test.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah'); window.location='edit.php?id=$id';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Game</title>
</head>
<body>
    <h2>Edit Data Game</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="foto_lama" value="<?php echo $row['foto']; ?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?php echo $row['nama']; ?>">
            </li>
            <li>
                <label for="genre">Genre :</label>
                <input type="text" name="genre" id="genre" required value="<?php echo $row['genre']; ?>">
            </li>
            <li>
                <label for="player">Player :</label>
                <input type="text" name="player" id="player" required value="<?php echo $row['player']; ?>">
            </li>
            <li>
                <label for="foto">Foto :</label>
                <img src="foto/<?php echo $row['foto']; ?>" width="100"><br>
                <input type="file" name="foto" id="foto" accept="image/jpeg">
            </li>
            <li>
                <label for="susah">Susah :</label>
                <input type="text" name="susah" id="susah" required value="<?php echo $row['susah']; ?>">
            </li>
            <br>
            <button type="submit" name="submit">Update Data!</button>
        </ul>
    </form>
    <a href="test.php"><button type="button">Kembali</button></a>
</body>
</html>