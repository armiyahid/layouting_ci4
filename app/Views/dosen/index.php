
<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Data Dosen</h2>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Email</th>
            <th>No. HP</th>
        </tr>
    </thead>

    <tbody>

        <?php if (empty($dosen)): ?>

            <tr>
                <td colspan="5">Data dosen belum tersedia.</td>
            </tr>

        <?php else: ?>

            <?php foreach ($dosen as $i => $dsn): ?>

                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= esc($dsn['nidn']) ?></td>
                    <td><?= esc($dsn['nama_dosen']) ?></td>
                    <td><?= esc($dsn['email']) ?></td>
                    <td><?= esc($dsn['no_hp']) ?></td>
                </tr>

            <?php endforeach; ?>

        <?php endif; ?>

    </tbody>
</table>

<?= $this->endSection() ?>
