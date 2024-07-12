<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h1>Tambah Mata Kuliah</h1>
    <form action="/mata_kuliah/store" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <br>
        <label for="kode">Kode:</label>
        <input type="text" name="kode" id="kode" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
