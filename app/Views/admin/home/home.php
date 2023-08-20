<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>

<?php
$namexp = explode(" ", $adminlogin['nama']);
$nickname = $namexp[0] . ' ' . $namexp[1][0] . "...";
?>


<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <main>
        <div class="p-md-5 p-4 bg-light rounded-3 my-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Selamat Datang,...
                </h1>
                <h2 class="mb-3"><?= $adminlogin['nama'] ?></h2>
                <p class="col-md-8 fs-4">Di situs <span class="fst-italic">"<?= BRAND ?>"</span>, <?= BRANDFULL ?>. <br> Pimpinan Komisariat <?= PIKOMFULL; ?></p>
                <a href="/admin" class="btn btn-primary btn-lg mt-3">Sign Out</a>
            </div>
        </div>
    </main>

    <!-- footer -->
    <?= $this->include("layout/footer-pages"); ?>
</div>


<?php $this->endSection() ?>