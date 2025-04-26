<!DOCTYPE html>
<html>
<head>
    <title>Form Film</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2><?= isset($film) ? 'Update Film' : 'Tambah Film' ?></h2>
    <form method="POST">
        <label>Judul:</label>
        <input type="text" name="judul" value="<?= $film['judul'] ?? '' ?>" required>
        <label>Genre:</label>
        <input type="text" name="genre" value="<?= $film['genre'] ?? '' ?>" required>
        <label>Tahun Rilis:</label>
        <input type="number" name="tahun_rilis" value="<?= $film['tahun_rilis'] ?? '' ?>" required>
        <label>Rating:</label>
        <input type="number" name="rating" min="1" max="10" value="<?= $film['rating'] ?? '' ?>" required>
        <button class="submit-btn" type="submit">
            <?= isset($film) ? 'Simpan Perubahan' : 'Tambah Film' ?>
        </button>
    </form>
    <a href="index.php">← Kembali ke daftar</a>
</div>
</body>
</html>
