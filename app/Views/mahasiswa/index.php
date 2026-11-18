<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Data Mahasiswa</h2>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </tr>
    </thead>

    <tbody>

        <?php if (empty($mahasiswa)): ?>

            <tr>
                <td colspan="4">Data mahasiswa belum tersedia.</td>
            </tr>

        <?php else: ?>

            <?php foreach ($mahasiswa as $i => $mhs): ?>

                <tr>
                    <td><?= $i + 1 ?></td>

                    <td><?= esc($mhs['nim']) ?></td>

                    <td><?= esc($mhs['nama']) ?></td>

                    <td><?= esc($mhs['prodi']) ?></td>
                </tr>

            <?php endforeach; ?>

        <?php endif; ?>

    </tbody>
</table>

<?= $this->endSection() ?>


