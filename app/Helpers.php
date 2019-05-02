<?php
function tempatStat($val){
    $status = [
        1 =>'<option value="1" selected>Bersama Orang Tua</option>
            <option value="2">Wali</option>
            <option value="3">Kos</option>
            <option value="4">Asrama</option>
            <option value="5">Panti Asuhan</option>
            <option value="6">Pesantren</option>
            <option value="9">Lainnya</option>',
        2 =>'<option value="1">Bersama Orang Tua</option>
            <option value="2" selected>Wali</option>
            <option value="3">Kos</option>
            <option value="4">Asrama</option>
            <option value="5">Panti Asuhan</option>
            <option value="6">Pesantren</option>
            <option value="9">Lainnya</option>',
        3 =>'<option value="1">Bersama Orang Tua</option>
            <option value="2">Wali</option>
            <option value="3" selected>Kos</option>
            <option value="4">Asrama</option>
            <option value="5">Panti Asuhan</option>
            <option value="6">Pesantren</option>
            <option value="9">Lainnya</option>',
        4 =>'<option value="1">Bersama Orang Tua</option>
            <option value="2">Wali</option>
            <option value="3">Kos</option>
            <option value="4" selected>Asrama</option>
            <option value="5">Panti Asuhan</option>
            <option value="6">Pesantren</option>
            <option value="9">Lainnya</option>',
        5 =>'<option value="1">Bersama Orang Tua</option>
            <option value="2">Wali</option>
            <option value="3">Kos</option>
            <option value="4">Asrama</option>
            <option value="5" selected>Panti Asuhan</option>
            <option value="6">Pesantren</option>
            <option value="9">Lainnya</option>',
        6 =>'<option value="1">Bersama Orang Tua</option>
            <option value="2">Wali</option>
            <option value="3">Kos</option>
            <option value="4">Asrama</option>
            <option value="5">Panti Asuhan</option>
            <option value="6" selected>Pesantren</option>
            <option value="9">Lainnya</option>',
        9 =>'<option value="1">Bersama Orang Tua</option>
            <option value="2">Wali</option>
            <option value="3">Kos</option>
            <option value="4">Asrama</option>
            <option value="5">Panti Asuhan</option>
            <option value="6">Pesantren</option>
            <option value="9" selected>Lainnya</option>'
    ];
    return $status[$val];
}
function modaStat($val){
    $status = [
        1 =>'<option value="1" selected>Jalan Kaki</option>
            <option value="2">Kendaraan Pribadi</option>
            <option value="3">Kendaraan umum / Pete-pete</option>
            <option value="4">Jemputan Sekolah</option>
            <option value="5">Kereta Api</option>
            <option value="6">Ojeg</option>
            <option value="7">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
            <option value="8">Perahu penyebrangan/Rakit/Getek</option>
            <option value="99">Lainnya</option>',
        2 =>'<option value="1">Jalan Kaki</option>
            <option value="2" selected>Kendaraan Pribadi</option>
            <option value="3">Kendaraan umum / Pete-pete</option>
            <option value="4">Jemputan Sekolah</option>
            <option value="5">Kereta Api</option>
            <option value="6">Ojeg</option>
            <option value="7">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
            <option value="8">Perahu penyebrangan/Rakit/Getek</option>
            <option value="99">Lainnya</option>',
        3 =>'<option value="1">Jalan Kaki</option>
            <option value="2">Kendaraan Pribadi</option>
            <option value="3" selected>Kendaraan umum / Pete-pete</option>
            <option value="4">Jemputan Sekolah</option>
            <option value="5">Kereta Api</option>
            <option value="6">Ojeg</option>
            <option value="7">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
            <option value="8">Perahu penyebrangan/Rakit/Getek</option>
            <option value="99">Lainnya</option>',
        4 =>'<option value="1">Jalan Kaki</option>
            <option value="2">Kendaraan Pribadi</option>
            <option value="3">Kendaraan umum / Pete-pete</option>
            <option value="4" selected>Jemputan Sekolah</option>
            <option value="5">Kereta Api</option>
            <option value="6">Ojeg</option>
            <option value="7">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
            <option value="8">Perahu penyebrangan/Rakit/Getek</option>
            <option value="99">Lainnya</option>',
        5 =>'<option value="1">Jalan Kaki</option>
            <option value="2">Kendaraan Pribadi</option>
            <option value="3">Kendaraan umum / Pete-pete</option>
            <option value="4">Jemputan Sekolah</option>
            <option value="5" selected>Kereta Api</option>
            <option value="6">Ojeg</option>
            <option value="7">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
            <option value="8">Perahu penyebrangan/Rakit/Getek</option>
            <option value="99">Lainnya</option>',
        6 =>'<option value="1">Jalan Kaki</option>
            <option value="2">Kendaraan Pribadi</option>
            <option value="3">Kendaraan umum / Pete-pete</option>
            <option value="4">Jemputan Sekolah</option>
            <option value="5">Kereta Api</option>
            <option value="6" selected>Ojeg</option>
            <option value="7">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
            <option value="8">Perahu penyebrangan/Rakit/Getek</option>
            <option value="99">Lainnya</option>',
        7 =>'<option value="1">Jalan Kaki</option>
            <option value="2">Kendaraan Pribadi</option>
            <option value="3">Kendaraan umum / Pete-pete</option>
            <option value="4">Jemputan Sekolah</option>
            <option value="5">Kereta Api</option>
            <option value="6">Ojeg</option>
            <option value="7" selected>Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
            <option value="8">Perahu penyebrangan/Rakit/Getek</option>
            <option value="99">Lainnya</option>',
        8 =>'<option value="1">Jalan Kaki</option>
            <option value="2">Kendaraan Pribadi</option>
            <option value="3">Kendaraan umum / Pete-pete</option>
            <option value="4">Jemputan Sekolah</option>
            <option value="5">Kereta Api</option>
            <option value="6">Ojeg</option>
            <option value="7">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
            <option value="8" selected>Perahu penyebrangan/Rakit/Getek</option>
            <option value="99">Lainnya</option>',
        99 =>'<option value="1">Jalan Kaki</option>
            <option value="2">Kendaraan Pribadi</option>
            <option value="3">Kendaraan umum / Pete-pete</option>
            <option value="4">Jemputan Sekolah</option>
            <option value="5">Kereta Api</option>
            <option value="6">Ojeg</option>
            <option value="7">Andong/Bendi/Sado/ Dokar/Delman/Beca</option>
            <option value="8">Perahu penyebrangan/Rakit/Getek</option>
            <option value="99" selected>Lainnya</option>'
    ];
    return $status[$val];
}
function alasanStat($val){
    $status = [
        1 =>'<option value="1" selected>Pemegang PKH/KPS/KIP</option>,
            <option value="2">Penerima BSM 2014</option>
            <option value="3">Yatim Piatu/Panti Asuhan/Panti Sosia</option>
            <option value="4">Dampak Bencana Alam</option>
            <option value="5">Prenah Drop OUT</option>
            <option value="6">Siswa Miskin/Rentan Miskin</option>
            <option value="7">Daerah Konflik</option>
            <option value="8">Keluarga Terpidna</option>
            <option value="9">Kelainan Fisik</option>',
        2 =>'<option value="1">Pemegang PKH/KPS/KIP</option>,
            <option value="2" selected>Penerima BSM 2014</option>
            <option value="3">Yatim Piatu/Panti Asuhan/Panti Sosia</option>
            <option value="4">Dampak Bencana Alam</option>
            <option value="5">Prenah Drop OUT</option>
            <option value="6">Siswa Miskin/Rentan Miskin</option>
            <option value="7">Daerah Konflik</option>
            <option value="8">Keluarga Terpidna</option>
            <option value="9">Kelainan Fisik</option>',
        3 =>'<option value="1">Pemegang PKH/KPS/KIP</option>,
            <option value="2">Penerima BSM 2014</option>
            <option value="3" selected>Yatim Piatu/Panti Asuhan/Panti Sosia</option>
            <option value="4">Dampak Bencana Alam</option>
            <option value="5">Prenah Drop OUT</option>
            <option value="6">Siswa Miskin/Rentan Miskin</option>
            <option value="7">Daerah Konflik</option>
            <option value="8">Keluarga Terpidna</option>
            <option value="9">Kelainan Fisik</option>',
        4 =>'<option value="1">Pemegang PKH/KPS/KIP</option>,
            <option value="2">Penerima BSM 2014</option>
            <option value="3">Yatim Piatu/Panti Asuhan/Panti Sosia</option>
            <option value="4" selected>Dampak Bencana Alam</option>
            <option value="5">Prenah Drop OUT</option>
            <option value="6">Siswa Miskin/Rentan Miskin</option>
            <option value="7">Daerah Konflik</option>
            <option value="8">Keluarga Terpidna</option>
            <option value="9">Kelainan Fisik</option>',
        5 =>'<option value="1">Pemegang PKH/KPS/KIP</option>,
            <option value="2">Penerima BSM 2014</option>
            <option value="3">Yatim Piatu/Panti Asuhan/Panti Sosia</option>
            <option value="4">Dampak Bencana Alam</option>
            <option value="5" selected>Prenah Drop OUT</option>
            <option value="6">Siswa Miskin/Rentan Miskin</option>
            <option value="7">Daerah Konflik</option>
            <option value="8">Keluarga Terpidna</option>
            <option value="9">Kelainan Fisik</option>',
        6 =>'<option value="1">Pemegang PKH/KPS/KIP</option>,
            <option value="2">Penerima BSM 2014</option>
            <option value="3">Yatim Piatu/Panti Asuhan/Panti Sosia</option>
            <option value="4">Dampak Bencana Alam</option>
            <option value="5">Prenah Drop OUT</option>
            <option value="6" selected>Siswa Miskin/Rentan Miskin</option>
            <option value="7">Daerah Konflik</option>
            <option value="8">Keluarga Terpidna</option>
            <option value="9">Kelainan Fisik</option>',
        7 =>'<option value="1">Pemegang PKH/KPS/KIP</option>,
            <option value="2">Penerima BSM 2014</option>
            <option value="3">Yatim Piatu/Panti Asuhan/Panti Sosia</option>
            <option value="4">Dampak Bencana Alam</option>
            <option value="5">Prenah Drop OUT</option>
            <option value="6">Siswa Miskin/Rentan Miskin</option>
            <option value="7" selected>Daerah Konflik</option>
            <option value="8">Keluarga Terpidna</option>
            <option value="9">Kelainan Fisik</option>',
        8 =>'<option value="1">Pemegang PKH/KPS/KIP</option>,
            <option value="2">Penerima BSM 2014</option>
            <option value="3">Yatim Piatu/Panti Asuhan/Panti Sosia</option>
            <option value="4">Dampak Bencana Alam</option>
            <option value="5">Prenah Drop OUT</option>
            <option value="6">Siswa Miskin/Rentan Miskin</option>
            <option value="7">Daerah Konflik</option>
            <option value="8" selected>Keluarga Terpidna</option>
            <option value="9">Kelainan Fisik</option>',
        9 =>'<option value="1">Pemegang PKH/KPS/KIP</option>,
            <option value="2">Penerima BSM 2014</option>
            <option value="3">Yatim Piatu/Panti Asuhan/Panti Sosia</option>
            <option value="4">Dampak Bencana Alam</option>
            <option value="5">Prenah Drop OUT</option>
            <option value="6">Siswa Miskin/Rentan Miskin</option>
            <option value="7">Daerah Konflik</option>
            <option value="8">Keluarga Terpidna</option>
            <option value="9" selected>Kelainan Fisik</option>'
    ];
    return $status[$val];
}
function typeStat($val){
    $status = [
        1 =>'<option value="1" selected>Ayah Kandung</option>
            <option value="2">Ibu Kandung</option>
            <option value="3">Wali</option>',
        2 =>'<option value="1">Ayah Kandung</option>
            <option value="2" selected>Ibu Kandung</option>
            <option value="3">Wali</option>',
        3 =>'<option value="1">Ayah Kandung</option>
            <option value="2">Ibu Kandung</option>
            <option value="3" selected>Wali</option>'
    ];
    return $status[$val];
}
function pendStat($val){
    $status = [
        1 =>'<option value="1" selected>Tidak Sekolah</option>
            <option value="2">Putus SD</option>
            <option value="3">SD Sederajat</option>
            <option value="4">SMP Sederajat</option>
            <option value="5">SMA Sederajat</option>
            <option value="6">D1</option>
            <option value="7">D2</option>
            <option value="8">D3</option>
            <option value="9">D4/S1</option>
            <option value="10">S2</option>
            <option value="11">S3</option>',
        2 =>'<option value="1">Tidak Sekolah</option>
            <option value="2" selected>Putus SD</option>
            <option value="3">SD Sederajat</option>
            <option value="4">SMP Sederajat</option>
            <option value="5">SMA Sederajat</option>
            <option value="6">D1</option>
            <option value="7">D2</option>
            <option value="8">D3</option>
            <option value="9">D4/S1</option>
            <option value="10">S2</option>
            <option value="11">S3</option>',
        3 =>'<option value="1">Tidak Sekolah</option>
            <option value="2">Putus SD</option>
            <option value="3" selected>SD Sederajat</option>
            <option value="4">SMP Sederajat</option>
            <option value="5">SMA Sederajat</option>
            <option value="6">D1</option>
            <option value="7">D2</option>
            <option value="8">D3</option>
            <option value="9">D4/S1</option>
            <option value="10">S2</option>
            <option value="11">S3</option>',
        4 =>'<option value="1">Tidak Sekolah</option>
            <option value="2">Putus SD</option>
            <option value="3">SD Sederajat</option>
            <option value="4" selected>SMP Sederajat</option>
            <option value="5">SMA Sederajat</option>
            <option value="6">D1</option>
            <option value="7">D2</option>
            <option value="8">D3</option>
            <option value="9">D4/S1</option>
            <option value="10">S2</option>
            <option value="11">S3</option>',
        5 =>'<option value="1">Tidak Sekolah</option>
            <option value="2">Putus SD</option>
            <option value="3">SD Sederajat</option>
            <option value="4">SMP Sederajat</option>
            <option value="5" selected>SMA Sederajat</option>
            <option value="6">D1</option>
            <option value="7">D2</option>
            <option value="8">D3</option>
            <option value="9">D4/S1</option>
            <option value="10">S2</option>
            <option value="11">S3</option>',
        6 =>'<option value="1">Tidak Sekolah</option>
            <option value="2">Putus SD</option>
            <option value="3">SD Sederajat</option>
            <option value="4">SMP Sederajat</option>
            <option value="5">SMA Sederajat</option>
            <option value="6" selected>D1</option>
            <option value="7">D2</option>
            <option value="8">D3</option>
            <option value="9">D4/S1</option>
            <option value="10">S2</option>
            <option value="11">S3</option>',
        7 =>'<option value="1">Tidak Sekolah</option>
            <option value="2">Putus SD</option>
            <option value="3">SD Sederajat</option>
            <option value="4">SMP Sederajat</option>
            <option value="5">SMA Sederajat</option>
            <option value="6">D1</option>
            <option value="7" selected>D2</option>
            <option value="8">D3</option>
            <option value="9">D4/S1</option>
            <option value="10">S2</option>
            <option value="11">S3</option>',
        8 =>'<option value="1">Tidak Sekolah</option>
            <option value="2">Putus SD</option>
            <option value="3">SD Sederajat</option>
            <option value="4">SMP Sederajat</option>
            <option value="5">SMA Sederajat</option>
            <option value="6">D1</option>
            <option value="7">D2</option>
            <option value="8" selected>D3</option>
            <option value="9">D4/S1</option>
            <option value="10">S2</option>
            <option value="11">S3</option>',
        9 =>'<option value="1">Tidak Sekolah</option>
            <option value="2">Putus SD</option>
            <option value="3">SD Sederajat</option>
            <option value="4">SMP Sederajat</option>
            <option value="5">SMA Sederajat</option>
            <option value="6">D1</option>
            <option value="7">D2</option>
            <option value="8">D3</option>
            <option value="9" selected>D4/S1</option>
            <option value="10">S2</option>
            <option value="11">S3</option>',
        10 =>'<option value="1">Tidak Sekolah</option>
            <option value="2">Putus SD</option>
            <option value="3">SD Sederajat</option>
            <option value="4">SMP Sederajat</option>
            <option value="5">SMA Sederajat</option>
            <option value="6">D1</option>
            <option value="7">D2</option>
            <option value="8">D3</option>
            <option value="9">D4/S1</option>
            <option value="10" selected>S2</option>
            <option value="11">S3</option>',
        11 =>'<option value="1">Tidak Sekolah</option>
            <option value="2">Putus SD</option>
            <option value="3">SD Sederajat</option>
            <option value="4">SMP Sederajat</option>
            <option value="5">SMA Sederajat</option>
            <option value="6">D1</option>
            <option value="7">D2</option>
            <option value="8">D3</option>
            <option value="9">D4/S1</option>
            <option value="10">S2</option>
            <option value="11" selected>S3</option>'
    ];
    return $status[$val];
}
function pekerStat($val){
    $status = [
        1 =>'<option value="1" selected>Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        2 =>'<option value="1">Tidak Bekerja</option>
            <option value="2" selected>Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        3 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3" selected>Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        4 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4" selected>Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        5 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5" selected>PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        6 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6" selected>Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        7 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7" selected>Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        8 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8" selected>Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        9 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9" selected>Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        10 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10" selected>Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        11 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11" selected>Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        12 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12" selected>Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        13 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13" selected>Meninggal Dunia</option>
            <option value="14">Lain-lain</option>',
        14 =>'<option value="1">Tidak Bekerja</option>
            <option value="2">Nelayan</option>
            <option value="3">Petani</option>
            <option value="4">Peternak</option>
            <option value="5">PNS/TNI/POLRI</option>
            <option value="6">Karyawan Swasta</option>
            <option value="7">Pedagang Kecil</option>
            <option value="8">Pedagang Besar</option>
            <option value="9">Wiraswasta</option>)
            <option value="10">Wirausaha</option>)
            <option value="11">Buruh</option>)
            <option value="12">Pensiunan</option>)
            <option value="13">Meninggal Dunia</option>
            <option value="14" selected>Lain-lain</option>'
    ];
    return $status[$val];
}
function penghasilanStat($val){
    $status = [
        1 =>'<option value="1" selected>Kurang dari 500,000</option>
            <option value="2">500.000 - 999.9999</option>
            <option value="3">1 juta - 1.999.999</option>
            <option value="4">2 juta - 4.999.999</option>
            <option value="5">5 juta - 20 juta</option>
            <option value="6">lebih dari 20 juta</option>
            <option value="7">Tidak Berpenghasilan</option>',
        2 =>'<option value="1">Kurang dari 500,000</option>
            <option value="2" selected>500.000 - 999.9999</option>
            <option value="3">1 juta - 1.999.999</option>
            <option value="4">2 juta - 4.999.999</option>
            <option value="5">5 juta - 20 juta</option>
            <option value="6">lebih dari 20 juta</option>
            <option value="7">Tidak Berpenghasilan</option>',
        3 =>'<option value="1">Kurang dari 500,000</option>
            <option value="2">500.000 - 999.9999</option>
            <option value="3" selected>1 juta - 1.999.999</option>
            <option value="4">2 juta - 4.999.999</option>
            <option value="5">5 juta - 20 juta</option>
            <option value="6">lebih dari 20 juta</option>
            <option value="7">Tidak Berpenghasilan</option>',
        4 =>'<option value="1">Kurang dari 500,000</option>
            <option value="2">500.000 - 999.9999</option>
            <option value="3">1 juta - 1.999.999</option>
            <option value="4" selected>2 juta - 4.999.999</option>
            <option value="5">5 juta - 20 juta</option>
            <option value="6">lebih dari 20 juta</option>
            <option value="7">Tidak Berpenghasilan</option>',
        5 =>'<option value="1">Kurang dari 500,000</option>
            <option value="2">500.000 - 999.9999</option>
            <option value="3">1 juta - 1.999.999</option>
            <option value="4">2 juta - 4.999.999</option>
            <option value="5" selected>5 juta - 20 juta</option>
            <option value="6">lebih dari 20 juta</option>
            <option value="7">Tidak Berpenghasilan</option>',
        6 =>'<option value="1">Kurang dari 500,000</option>
            <option value="2">500.000 - 999.9999</option>
            <option value="3">1 juta - 1.999.999</option>
            <option value="4">2 juta - 4.999.999</option>
            <option value="5">5 juta - 20 juta</option>
            <option value="6" selected>lebih dari 20 juta</option>
            <option value="7">Tidak Berpenghasilan</option>',
        7 =>'<option value="1">Kurang dari 500,000</option>
            <option value="2">500.000 - 999.9999</option>
            <option value="3">1 juta - 1.999.999</option>
            <option value="4">2 juta - 4.999.999</option>
            <option value="5">5 juta - 20 juta</option>
            <option value="6">lebih dari 20 juta</option>
            <option value="7" selected>Tidak Berpenghasilan</option>'
    ];
    return $status[$val];
}
function jenisStat($val){
    $status = [
        1 =>'<option value="1" selected>Sains</option>
            <option value="2">Seni</option>
            <option value="3">Olahraga</option>
            <option value="4">Lain-lain</option>',
        2 =>'<option value="1">Sains</option>
            <option value="2" selected>Seni</option>
            <option value="3">Olahraga</option>
            <option value="4">Lain-lain</option>',
        3 =>'<option value="1">Sains</option>
            <option value="2">Seni</option>
            <option value="3" selected>Olahraga</option>
            <option value="4">Lain-lain</option>',
        4 =>'<option value="1">Sains</option>
            <option value="2">Seni</option>
            <option value="3">Olahraga</option>
            <option value="4" selected>Lain-lain</option>'
    ];
    return $status[$val];
}
function tingkatStat($val){
    $status = [
        1 =>'<option value="1" selected>Sekolah</option>
            <option value="2">Kecamatan</option>
            <option value="3">Kabupaten</option>
            <option value="4">Provinsi</option>
            <option value="5">Nasional</option>
            <option value="6">Internasional</option>',
        2 =>'<option value="1">Sekolah</option>
            <option value="2" selected>Kecamatan</option>
            <option value="3">Kabupaten</option>
            <option value="4">Provinsi</option>
            <option value="5">Nasional</option>
            <option value="6">Internasional</option>',
        3 =>'<option value="1">Sekolah</option>
            <option value="2">Kecamatan</option>
            <option value="3" selected>Kabupaten</option>
            <option value="4">Provinsi</option>
            <option value="5">Nasional</option>
            <option value="6">Internasional</option>',
        4 =>'<option value="1">Sekolah</option>
            <option value="2">Kecamatan</option>
            <option value="3">Kabupaten</option>
            <option value="4" selected>Provinsi</option>
            <option value="5">Nasional</option>
            <option value="6">Internasional</option>',
        5 =>'<option value="1">Sekolah</option>
            <option value="2">Kecamatan</option>
            <option value="3">Kabupaten</option>
            <option value="4">Provinsi</option>
            <option value="5" selected>Nasional</option>
            <option value="6">Internasional</option>',
        6 =>'<option value="1">Sekolah</option>
            <option value="2">Kecamatan</option>
            <option value="3">Kabupaten</option>
            <option value="4">Provinsi</option>
            <option value="5">Nasional</option>
            <option value="6" selected>Internasional</option>'
    ];
    return $status[$val];
}
function jenisbeStat($val){
    $status = [
        1 =>'<option value="1" selected>Anak berprestasi</option>
            <option value="2">Anak Miskin</option>
            <option value="3">Pendidikan</option>
            <option value="4">Unggulan</option>
            <option value="99">Lain-lain</option>',
        2 =>'<option value="1">Anak berprestasi</option>
            <option value="2" selected>Anak Miskin</option>
            <option value="3">Pendidikan</option>
            <option value="4">Unggulan</option>
            <option value="99">Lain-lain</option>',
        3 =>'<option value="1">Anak berprestasi</option>
            <option value="2">Anak Miskin</option>
            <option value="3" selected>Pendidikan</option>
            <option value="4">Unggulan</option>
            <option value="99">Lain-lain</option>',
        4 =>'<option value="1">Anak berprestasi</option>
            <option value="2">Anak Miskin</option>
            <option value="3">Pendidikan</option>
            <option value="4" selected>Unggulan</option>
            <option value="99">Lain-lain</option>',
        99 =>'<option value="1">Anak berprestasi</option>
            <option value="2">Anak Miskin</option>
            <option value="3">Pendidikan</option>
            <option value="4">Unggulan</option>
            <option value="99" selected>Lain-lain</option>'
    ];
    return $status[$val];
}
function jpendaftaranStat($val){
    $status = [
        1 =>'<span class="label label-danger label-rouded">Siswa Baru</span>',
        2 =>'<span class="label label-success label-rouded">Pindahan</span>',
        3 =>'<span class="label label-info label-rouded">Kembali Bersekolah</span>'    
    ];
    return $status[$val];
}