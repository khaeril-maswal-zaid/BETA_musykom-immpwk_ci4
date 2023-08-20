<?php

function KelenderIna($data = '07-03-1999')
{
    $bulan = [
        1 => 'Januari',     'Februari',     'Maret',
        'April',        'Mei',          'Juni',
        'Juli',         'Agustus',      'September',
        'Oktober',      'November',     'Desember'
    ];

    $tglexp = explode('-', $data);

    return $tglexp[0] . ' ' . $bulan[(int)$tglexp[1]] . ' ' . $tglexp[2];
}
