<!-- app/Views/mata_kuliah/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Kuliah</title>
</head>
<body>
    <h1>Daftar Mata Kuliah</h1>
    <a href="/mata_kuliah/create">Tambah Mata Kuliah</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kode</th>
            <th>Aksi</th>
        </tr>
        <?php if (!empty($mata_kuliah) && is_array($mata_kuliah)) : ?>
            <?php foreach($mata_kuliah as $mk): ?>
            <tr>
                <td><?= esc($mk['id']) ?></td>
                <td><?= esc($mk['nama']) ?></td>
                <td><?= esc($mk['kode']) ?></td>
                <td>
                    <a href="/mata_kuliah/edit/<?= esc($mk['id']) ?>">Edit</a>
                    <a href="/mata_kuliah/delete/<?= esc($mk['id']) ?>">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="4">Belum ada data mata kuliah.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
