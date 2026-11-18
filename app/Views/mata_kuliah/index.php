
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Data Mata Kuliah</h2>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen Pengampu</th>
        </tr>
    </thead>

    <tbody>

        <?php if (empty($mata_kuliah)): ?>

            <tr>
                <td colspan="6">Data mata kuliah belum tersedia.</td>
            </tr>

        <?php else: ?>

            <?php foreach ($mata_kuliah as $i => $mk): ?>

                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= esc($mk['kode_matkul']) ?></td>
                    <td><?= esc($mk['nama_matkul']) ?></td>
                    <td><?= esc($mk['sks']) ?></td>
                    <td><?= esc($mk['semester']) ?></td>
                    <td><?= esc($mk['nama_dosen']) ?></td>
                </tr>

            <?php endforeach; ?>

        <?php endif; ?>

    </tbody>
</table>

<?= $this->endSection() ?>
