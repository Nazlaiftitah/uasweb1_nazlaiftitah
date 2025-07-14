<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-4 text-center mb-4 mb-md-0">
            <img src="<?= BASEURL ?>/img/nazla.jpeg" alt="Foto Profil" class="img-fluid rounded-circle shadow"
                style="max-height: 200px;">
        </div>
        <div class="col-md-8">
            <h1 class="display-6 fw-semibold">About Me</h1>
            <p class="lead">
                Halo, nama saya <strong><?= $data['nama'] ?></strong>, umur saya <strong><?= $data['umur'] ?></strong>
                tahun, saya adalah seorang <strong><?= $data['pekerjaan'] ?></strong>.
            </p>
        </div>
    </div>
</div>