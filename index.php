<?php

include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>

    <h1>Data Siswa</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Umur</th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($query)): ?>

            <tr>
                <td><?= $data['id']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['kelas']; ?></td>
                <td><?= $data['umur']; ?></td>
            </tr>

        <?php endwhile; ?>

    </table>

</body>
</html>