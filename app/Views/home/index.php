<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>

<main class="container col-md-10 ms-sm-auto col-lg-12 px-md-4">
    <div class="p-md-5 p-4 bg-light rounded-3 my-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Selamat Datang,...</h1>
            <h2 class="mb-3"><?= $datapemilih['nama'] ?></h2>
            <p class="col-md-8 fs-4">Di portal <span class="fst-italic">"<?= BRAND ?>"</span>, <?= BRANDFULL ?>.</p>
        </div>
    </div>

    <form action="/userproses/prosespemilihan" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="idpemilih" value="<?= $datapemilih['id'] ?>">

        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">Pilih 13 Formatur!</h5>
                <p class="card-text">Silahkan tentukan 13 Formatur sebagai bakal Pimpinan Komisariat versi anda.</p>
            </div>

            <ul class="list-group list-group-flush">
                <?php $i = 1;
                foreach ($calonformatur as $formaturs) :
                ?>

                    <label for="formatur-<?= $i ?>">
                        <li class="list-group-item border">
                            <input type="checkbox" name="formatur-<?= $i ?>" id="formatur-<?= $i++ ?>" value="<?= $formaturs['nim']; ?>">
                            <?= $formaturs['nama']; ?>
                        </li>
                    </label>
                <?php endforeach; ?>
            </ul>

            <div class="card-body">
                <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
                <button type="submit" class="btn btn-sm btn-primary" name="nim" value="<?= $datapemilih['nim'] ?>">Kirim</button>
            </div>
        </div>
    </form>
</main>

<?php $this->endSection() ?>