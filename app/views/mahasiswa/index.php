<div class="container mt-5">

    <div class="row">

        <div class="col-lg-6">
            <?= Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <!-- Tombol trigger modal -->
            <button type="button" class="btn btn-success mb-3 tampilModalTambah" data-bs-toggle="modal"
                data-bs-target="#formModal">
                + Tambah Data Mahasiswa
            </button>
        </div>
        <div class="row">

            <div class="col-lg-6">
                <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Mahasiswa..." name="keyword"
                            id="keyword" autocomplete="off">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
            </div>
        </div>



    </div>

    <div class="row">
        <div class="col-10">


            <h3 class="mb-3">Daftar Mahasiswa</h3>

            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered shadow-sm">
                    <thead class="table-success text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Informasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data['mhs'] as $mhs) : ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= $mhs['nama']; ?></td>
                            <td>
                                <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>"
                                    class="btn btn-info btn-sm ">Detail</a>
                            </td>

                            <td>
                                <a href="#" class="btn btn-success btn-sm tampilModalUbah" data-bs-toggle="modal"
                                    data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">
                                    Ubah
                                </a>

                                <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="btn btn-danger btn-sm"
                                    onclick="confirm('Yakin Untuk Menghapus Data Mahasiswa Tersebut ?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <form id="formMahasiswa" action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                    <div class="mb-3">

                        <label for="nama" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Mahasiswa</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" id="jurusan" name="jurusan" required>
                            <option selected disabled value="">-- Pilih Jurusan --</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                <input type="hidden" name="id" id="id">

                <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
            </form>
        </div>
    </div>
</div>