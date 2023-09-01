<?php

$htmlBody1 = '';
for ($i = 1; $i < 8; $i++) {
    $htmlBody1 .= "
        <tr align='center'>
            <td style='border: 1px solid; padding:4px;' >$i</td>
            <td style='border: 1px solid; padding:4px;' >Rabu, 25 Januari 2023</td>
            <td style='border: 1px solid; padding:4px;' >08:30 - 10:00</td>
            <td style='border: 1px solid; padding:4px;' >AJK125</td>
            <td style='border: 1px solid; padding:4px;' align='left'>BAHASA INGGRIS 1</td>
            <td style='border: 1px solid; padding:4px;' >2</td>
            <td style='border: 1px solid; padding:4px;' >BI1</td>
            <td style='border: 1px solid; padding:4px;' >Ruang A 304</td>
            <td style='border: 1px solid; padding:4px;' ></td>
        </tr>
    ";
}

$htmlBody2 = '';
for ($i = 1; $i < 8; $i++) {
    $htmlBody2 .= "
    <tr>
        <td style='border: 1px solid; padding:4px;' align='center'>$i</td>
        <td style='border: 1px solid; padding:4px;' align='left'>Fisika Rekayasa</td>
        <td style='border: 1px solid; padding:4px;' align='center'>AJK125</td>
        <td style='border: 1px solid; padding:4px;' align='center'>4</td>
        <td style='border: 1px solid; padding:4px;' align='center'></td>
    </tr>
    ";
}


$body1 = " 
<div style='margin-top: 5px;'>
    <table style='border-collapse: collapse; font-size: 12px;' width='100%'>
        <thead>
            <tr>
                <th style='border: 1px solid;' width='40px' >No.</th>
                <th style='border: 1px solid;' width='180px' >Hari, Tanggal</th>
                <th style='border: 1px solid;' width='100px' >Jam</th>
                <th style='border: 1px solid;' width='70px' >Kode</th>
                <th style='border: 1px solid;' width=''>Nama MataKuliah</th>
                <th style='border: 1px solid;' width='60px' >SKS</th>
                <th style='border: 1px solid;' width='50px' >Kode Kelas</th>
                <th style='border: 1px solid;' width='70px'>Ruang</th>
                <th style='border: 1px solid;' width='30px' >Paraf Pengawas</th>
            </tr>
        </thead>
        <tbody>
            $htmlBody1
        </tbody>
    </table>
</div>";


$body2 = "
<div style='margin-top: 15px;'>
    <table style='border-collapse: collapse; font-size: 14px;' width='100%'>
        <thead>
            <tr>
                <th style='border: 1px solid;' width='40px' >No</th>
                <th style='border: 1px solid;' width='' >NAMA MATA KULIAH</th>
                <th style='border: 1px solid;' width='60px' >Kode</th>
                <th style='border: 1px solid;' width='60px'>SKS</th>
                <th style='border: 1px solid;' width=''>Paraf Dosen</th>
            </tr>
        </thead>
        <tbody>
            $htmlBody2
        </tbody>
    </table>
</div>";
