<div class="container mt-5">
    <div class="row">
        <div class="col-10">
            <h3 class="mb-4">Daftar Mahasiswa</h3>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle shadow-sm">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Informasi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data['mhs'] as $mhs) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $mhs['nama']; ?></td>
                            <td><a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>">Detail</a></td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>