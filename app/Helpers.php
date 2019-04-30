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