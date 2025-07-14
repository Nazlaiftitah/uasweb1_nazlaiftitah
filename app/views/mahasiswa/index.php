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
                            <th>NIM</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data['mhs'] as $mhs) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $mhs['nama']; ?></td>
                            <td><?= $mhs['nim']; ?></td>
                            <td><?= $mhs['email']; ?></td>
                            <td><?= $mhs['jurusan']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>