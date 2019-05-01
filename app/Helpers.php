<?php

function agamaStat($val){
    $status = [
        0 =>'<option>Islam</option>',
        1 =>'<option>Kristen/ Protestan</option>',
        2 =>'<option>Katholik</option>',
        3 =>'<option>Hindu</option>',
        4 =>'<option>Budha</option>',
        5 =>'<option>Khong Hu Chu</option>',
        6 =>'<option>Kepercayaan Kpd Tuan YME</option>',
        99 =>'<option>Lainnya</option>'
    ];

    return $status[$val];
}

function tempatStat($val){
    $status = [
        1 =>'<option>Bersama Orang Tua</option>',
        2 =>'<option>Wali</option>',
        3 =>'<option>Kos</option>',
        4 =>'<option>Asrama</option>',
        5 =>'<option>Panti Asuhan</option>',
        6 =>'<option>Pesantren</option>',
        9 =>'<option>Lainnya</option>'
    ];

    return $status[$val];
}

function modaStat($val){
    $status = [
        1 =>'<option value="1">Jalan Kaki</option>',
        2 =>'<option value="2">Kendaraan Pribadi</option>',
        3 =>'<option value="3">Kendaraan umum / Pete-pete</option>',
        4 =>'<option value="4">Jemputan Sekolah</option>',
        5 =>'<option value="5">Kereta Api</option>',
        6 =>'<option value="6">Ojeg</option>',
        7 =>'<option value="7">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>',
        8 =>'<option value="8">Perahu penyebrangan/Rakit/Getek</option>',
        99 =>'<option value="99">Lainnya</option>'
    ];
    return $status[$val];
}