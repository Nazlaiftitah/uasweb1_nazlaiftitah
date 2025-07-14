<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h3 class="mb-4">Detail Mahasiswa</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Nama:</strong> <?= $data['mhs']['nama']; ?>
                </li>
                <li class="list-group-item">
                    <strong>NIM:</strong> <?= $data['mhs']['nim']; ?>
                </li>
                <li class="list-group-item">
                    <strong>Email:</strong> <?= $data['mhs']['email']; ?>
                </li>
                <li class="list-group-item">
                    <strong>Jurusan:</strong> <?= $data['mhs']['jurusan']; ?>
                </li>
            </ul>
            <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-secondary mt-3">← Kembali ke Daftar</a>
        </div>
    </div>
</div>