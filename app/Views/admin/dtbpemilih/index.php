<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>


<div class="col-md-9 ms-sm-auto col-lg-10 px-md-3">
    <main>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Database Peserta Penuh MUSYKOM <?= PIKOM; ?></h1>
        </div>

        <div class="row">
            <?php $titlecard = ['Jumlah IMMawati', 'Jumlah IMMawan', 'Total Pemilih']; ?>

            <?php for ($i = 0; $i < count($titlecard); $i++) : ?>
                <div class="col-md-3">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-header">
                            <h5 class="card-title"><?= $titlecard[$i]; ?></h5>
                        </div>
                        <div class="card-body">
                            <h1 class="fw-bold"> Orang</h1>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Status Pilih</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                foreach ($datapemilih as $pemilih) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $no++; ?></th>
                        <td><?= $pemilih['nama']; ?></td>
                        <td><?= $pemilih['nim']; ?></td>
                        <td><?= $pemilih['angkatan']; ?></td>
                        <td><?php if ($pemilih['statuspilih'] === '1') {
                                echo '<span class="float-end">True</span>';
                            } else {
                                echo 'False';
                            }
                            ?></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="<?=URL.$pemilih['nim']?>" target="blank_" class="btn btn-sm btn-success">View</a>
                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </main>

    <!-- footer -->
    <?= $this->include("layout/footer-pages"); ?>
</div>


<?php $this->endSection() ?>