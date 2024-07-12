<!DOCTYPE html>
<html>
head>
    <title>Edit Mata Kuliah</title>
</head>
<body>
    <h1>Edit Mata Kuliah</h1>
    <form action="/mata_kuliah/update/<?= $mata_kuliah['id'] ?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?= $mata_kuliah['nama'] ?>" required>
        <br>
        <label for="kode">Kode:</label>
        <input type="text" name="kode" id="kode" value="<?= $mata_kuliah['kode'] ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
