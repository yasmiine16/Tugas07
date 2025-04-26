<!DOCTYPE html>
<html>
<head>
    <title>Daftar Film</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Daftar Film Favorit</h2>
    <a href="index.php?action=create"><button class="submit-btn">+ Tambah Film</button></a>
    <table border="1" width="100%" cellspacing="0" cellpadding="8">
        <tr style="background-color:#805ad5;color:white;">
            <th>No</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Tahun</th>
            <th>Rating</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = $films->fetch_assoc()): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['genre'] ?></td>
            <td><?= $row['tahun_rilis'] ?></td>
            <td><?= $row['rating'] ?></td>
            <td>
    <div class="action-buttons">
        <a href="index.php?action=edit&id=<?= $row['id'] ?>">
            <button class="update-btn">Edit</button>
        </a>
        <a href="index.php?action=delete&id=<?= $row['id'] ?>" onclick="return confirm('Hapus?')">
            <button class="delete-btn">Hapus</button>
        </a>
    </div>
</td>

        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>
