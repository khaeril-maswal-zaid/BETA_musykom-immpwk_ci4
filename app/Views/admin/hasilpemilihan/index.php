<?php $this->extend('layout/template') ?>

<?php $this->section('content') ?>

<!-- JavaScript for Hightchart fitur-->
<script src="/assets/js/hightchart/highcharts.js"></script>
<script src="/assets/js/hightchart/exporting.js"></script>
<script src="/assets/js/hightchart/export-data.js"></script>
<script src="/assets/js/hightchart/accessibility.js"></script>


<div class="col-md-9 ms-sm-auto col-lg-10 px-md-3">
    <main>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Diagram Hasil Pemilihan Formatur <?= PIKOM; ?></h1>
        </div>

        <div class="row">
            <?php $titlecard = ['Jumlah Pemilih', 'Jumlah Suara', 'Jumlah Pemilih Hadir', 'Pemilih Tidak Hadir']; ?>

            <?php for ($i = 0; $i < count($titlecard); $i++) : ?>
                <div class="col-md-3">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">
                            <h5 class="card-title"><?= $titlecard[$i]; ?></h5>
                        </div>
                        <div class="card-body">
                            <h1 class="fw-bold"><?= $datacard[$i]; ?> Orang</h1>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>


        <script type="text/javascript">
            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Hasil Prolehan Suara Pemilihan Formatur Musyawarah Komisariat'
                },
                subtitle: {
                    text: 'Pimpinan Komisariat IMM <?= PIKOMFULL ?>'
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: '<?= BRAND . ' ' . PIKOM ?>'
                    }
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: 'Prolehan Suara: <b>{point.y:f}</b>'
                },
                series: [{
                    name: '<?= BRAND . ' ' . PIKOM ?>',
                    data: [
                        <?php
                        foreach ($calonformatur as $formaturs) {
                            echo "['" . $formaturs['nama'] . "', " . $hasilpemilihan[0][$formaturs['nim']] . "-1],";
                        }; ?>
                    ],
                    dataLabels: {
                        enabled: true,
                        rotation: -90,
                        color: '#FFFFFF',
                        align: 'right',
                        format: '{point.y:f}', // one decimal
                        y: 10, // 10 pixels down from the top
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                }]
            });
        </script>
    </main>

    <!-- footer -->
    <?= $this->include("layout/footer-pages"); ?>
</div>


<?php $this->endSection() ?>