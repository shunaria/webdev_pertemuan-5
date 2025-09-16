<?php
include 'db.php';
$sql = "SELECT * from game";
$result = mysqli_query($conn, $sql);
$game = [];
if($result){
    $game = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME</title>
</head>
<body>

    <h1>GAME DB</h1>
    <a href="form.php"><button type="button">Tambah Data Game</button></a>
    <br><br>
    <?php if (count ($game) > 0) : ?>
    <?php endif ; ?>
    <table border="1" cellpadding ="10" cellspacing="0">
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>genre</th>
                <th>player</th>
                <th>foto</th>
                <th>susah</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($game as $row) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['genre']; ?></td>
                <td><?php echo $row['player']; ?></td>
                <td><img src="foto/<?php echo $row['foto']; ?>" width="100"></td>
                <td><?php echo $row['susah']; ?></td>
                <td> <a href="delete.php?id=<?php echo $row['id']; ?>">
                <button type="button">delete</button></a>
                <a href="edit.php?id=<?php echo $row['id']; ?>">
                <button type="button">edit</button></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>