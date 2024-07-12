<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Kuliah</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Daftar Mata Kuliah</h1>
        <a href="/mata_kuliah/create" class="btn">Tambah Mata Kuliah</a>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kode</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mata_kuliah as $mk): ?>
                <tr>
                    <td><?= $mk['id'] ?></td>
                    <td><?= $mk['nama'] ?></td>
                    <td><?= $mk['kode'] ?></td>
                    <td>
                        <a href="/mata_kuliah/edit/<?= $mk['id'] ?>" class="btn-action">Edit</a>
                        <a href="/mata_kuliah/delete/<?= $mk['id'] ?>" class="btn-action" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
