<?php

$htmlBody1 = '';
for ($i = 1; $i < 10; $i++) {
    $htmlBody1 .= "
        <tr>
            <td style='border: 0; padding:4px;' align='left'>AFE513</td>
            <td style='border: 0; padding:4px;' align='left'>Managerial Accounting</td>
            <td style='border: 0; padding:4px;' align='center'>2</td>
            <td style='border: 0; padding:4px;' align='center'>A</td>
            <td style='border: 0; padding:4px;' align='center'>8</td>
        </tr>
    ";
}

$htmlBody2 = '';
for ($i = 1; $i < 6; $i++) {
    $j = $i + 5;
    $htmlBody2 .= "
    <tr style='margin-top: 20px;'>
        <td style='border: 1px solid; padding:4px;' align='center'>$i</td>
        <td style='border: 1px solid; padding:4px;' align='left'>Communication Study</td>
        <td style='border: 1px solid; padding:4px;' align='center'>4</td>
        <td style='border: 1px solid; padding:4px;' align='center'>A</td>
        <td style='border: 1px solid; padding:4px;' align='center'>4.00</td>
        <td style='border: 1px solid; padding:4px;' align='center'>16.00</td>
        <td></>
        <td style='border: 1px solid; padding:4px;' align='center'>$j</td>
        <td style='border: 1px solid; padding:4px;' align='left'>Communication Study</td>
        <td style='border: 1px solid; padding:4px;' align='center'>4</td>
        <td style='border: 1px solid; padding:4px;' align='center'>A</td>
        <td style='border: 1px solid; padding:4px;' align='center'>4.00</td>
        <td style='border: 1px solid; padding:4px;' align='center'>16.00</td>
    </tr>
    ";
}


$htmlBody3 = '';
for ($i = 1; $i < 8; $i++) {
    $htmlBody3 .= "
        <tr>
            <td style='border: 1px solid; padding:4px;' align='center'>$i.</td>
            <td style='border: 1px solid; padding:4px;' align='center'>MKU2201</td>
            <td style='border: 1px solid; padding:4px;' align='left'>Pekerjaan Dasar Teknik Perkapalan</td>
            <td style='border: 1px solid; padding:4px;' align='center'>A</td>
            <td style='border: 1px solid; padding:4px;' align='center'>4.00</td>
            <td style='border: 1px solid; padding:4px;' align='center'>2</td>
            <td style='border: 1px solid; padding:4px;' align='center'>8</td>
        </tr>
    ";
}


$htmlBody4 = '';
for ($i = 1; $i < 7; $i++) {
    $htmlBody4 .= "
    <tr>
        <td style='border: 1px solid; padding:4px;' align='center'>$i</td>
        <td style='border: 1px solid; padding:4px;' align='left'>312312</td>
        <td style='border: 1px solid; padding:4px;' align='left'>Fisika Rekayasa</td>
        <td style='border: 1px solid; padding:4px;' align='center'>3</td>
        <td style='border: 1px solid; padding:4px;' align='center'>A</td>
        <td style='border: 1px solid; padding:4px;' align='center'>6.9</td>
    </tr>
    ";
}


$htmlBody5 = '';
for ($i = 1; $i < 12; $i++) {
    $j = $i + 11;
    $htmlBody5 .= "
    <tr>
        <td style='border: 0; padding:4px;' align='center'>$i</td>
        <td style='border: 0; padding:4px;' align='center'>FP0101</td>
        <td style='border: 0; padding:4px;' align='left'>PENGANTAR ILMU PERTANIAN</td>
        <td style='border: 0; padding:4px;' align='center'>3</td>
        <td style='border: 0; padding:4px;' align='center'>A</td>
        <td style='border: 0; padding:4px;' align='center'>8.00</td>
        <td></>
        <td style='border: 0; padding:4px;' align='center'>$j</td>
        <td style='border: 0; padding:4px;' align='center'>FP0101</td>
        <td style='border: 0; padding:4px;' align='left'>PENGANTAR ILMU PERTANIAN</td>
        <td style='border: 0; padding:4px;' align='center'>3</td>
        <td style='border: 0; padding:4px;' align='center'>A</td>
        <td style='border: 0; padding:4px;' align='center'>8.00</td>
    </tr>
    ";
}

$body1 = " 
<div style='margin-top: 5px;'>
    <table style='border-collapse: collapse; font-size: 8.5pt;' width='100%'>
        <thead>
            <tr>
                <th style='border: 0;' width='25%'>COURSE CODE</th>
                <th style='border: 0;' width='45%'>COURSES</th>
                <th style='border: 0;' width='10%'>CREDIT POINT</th>
                <th style='border: 0;' width='10%'>GRADE</th>
                <th style='border: 0;' width='10%'>WEIGHTED SCORE</th>
            </tr>
        </thead>
        <tbody>
            $htmlBody1
    </table>
    <table style='border-collapse: collapse; font-size: 12px; margin-top:15px' width='100%'>
        <tbody>
            <tr>
                <td style='border: 1px solid; align='left'><em>*See reverse for explanation of grade, grade point average (GPA) calculation, and predicate based on GPA</em></td>
            </tr>
        </tbody>
    </table>
</div>";

$body2 = "
<div style='margin-top: 20px;'>
    <table style='text-align: center; border-collapse: collapse; font-size: 9pt;' width='100%'>
        <thead>
            <tr>
                <th style='border: 1px solid;' width='2.5%'><strong>NO</strong></th>
                <th style='border: 1px solid;' width='33.75'><strong>SUBJECT</strong></th>
                <th style='border: 1px solid;' width='2.5%'><strong>C</strong></th>
                <th style='border: 1px solid;' width='2.5%'><strong>G</strong></th>
                <th style='border: 1px solid;' width='2.5%'><strong>GV</strong></th>
                <th style='border: 1px solid;' width='5%'><strong>AG</strong></th>
                <th style='border: 0;' width='2.5%'></th>
                <th style='border: 1px solid;' width='2.5%'><strong>NO</strong></th>
                <th style='border: 1px solid;' width='33.75%'><strong>SUBJECT</strong></th>
                <th style='border: 1px solid;' width='2.5%'><strong>C</strong></th>
                <th style='border: 1px solid;' width='2.5%'><strong>G</strong></th>
                <th style='border: 1px solid;' width='2.5%'><strong>GV</strong></th>
                <th style='border: 1px solid;' width='5%'><strong>AG</strong></th>
            </tr>
        </thead>
        <tbody>
            $htmlBody2
        </tbody>
    </table>
    <table style='border-collapse: collapse; font-size: 9pt; margin-top:15px' width='100%'>
        <tbody>
            <tr>
                <td>ACCUMULATED CREDITS</td>
                <td>:</td>
                <td colspan='4'>&nbsp;</td>
            </tr>
            <tr>
                <td colspan='6'>KETERANGAN</td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:&nbsp;</td>
                <td>Satuan Kredit Semester</td>
                <td>Jumlah SKS Yang Diambil</td>
                <td>:</td>
                <td>32</td>
            </tr>
            <tr>
                <td> HM</td>
                <td>:</td>
                <td>Huruf Mutu</td>
                <td>Jumlah SKS Yang lulus</td>
                <td>:</td>
                <td>32</td>
            </tr>
            <tr>
                <td> AM </td>
                <td>:</td>
                <td>Angka Mutu</td>
                <td> Jumlah Mutu</td>
                <td>:</td>
                <td>117</td>
            </tr>
            <tr>
                <td>M</td>
                <td>:</td>
                <td>Mutu</td>
                <td>Index Prestasi Kumulatif (IPK)</td>
                <td>:</td>
                <td>3.66</td>
            </tr>
        </tbody>
    </table>
</div>";


$body3 = "
<div style='margin-top: 5px;'>
    <table style='text-align: center; border-collapse: collapse; font-size: 9pt;' width='100%'>
        <thead>
            <tr>
                <th style='border: 1px solid;' width='5%'><strong>NO</strong></th>
                <th style='border: 1px solid;' width='10%'><strong>KODE</strong></th>
                <th style='border: 1px solid;' width='60%'><strong>MATA KULIAH</strong></th>
                <th style='border: 1px solid;' width='5%'><strong>NILAI</strong></th>
                <th style='border: 1px solid;' width='5%'><strong>A.M</strong></th>
                <th style='border: 1px solid;' width='5%'><strong>SKS</strong></th>
                <th style='border: 1px solid;' width='10%'><strong>BOBOT</strong></th>
            </tr>
        </thead>
        <tbody>
            $htmlBody3
        </tbody>
    </table>
    <table style='border-collapse: collapse; font-size: 9pt; margin-top:15px' width='100%'>
        <tbody>
            <tr>
                <td> Judul Tugas Akhir</td>
                <td>:</td>
                <td colspan='4'>&nbsp;</td>
            </tr>
            <tr>
                <td colspan='6'>KETERANGAN</td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:&nbsp;</td>
                <td>Satuan Kredit Semester</td>
                <td>Jumlah SKS Yang Diambil</td>
                <td>:</td>
                <td>32</td>
            </tr>
            <tr>
                <td> HM</td>
                <td>:</td>
                <td>Huruf Mutu</td>
                <td>Jumlah SKS Yang lulus</td>
                <td>:</td>
                <td>32</td>
            </tr>
            <tr>
                <td> AM </td>
                <td>:</td>
                <td>Angka Mutu</td>
                <td> Jumlah Mutu</td>
                <td>:</td>
                <td>117</td>
            </tr>
            <tr>
                <td>M</td>
                <td>:</td>
                <td>Mutu</td>
                <td>Index Prestasi Kumulatif (IPK)</td>
                <td>:</td>
                <td>3.66</td>
            </tr>
        </tbody>
    </table>
</div>";


$body4 = "
<div style='margin-top: 15px;'>
    <table style='border-collapse: collapse; font-size: 12px; text-align: center;' width='100%'>
        <thead style='border-top: 1px solid; border-bottom: 1px solid;'>
            <tr>
                <th style='border: 1px solid;' width='40px'>No.</th>
                <th style='border: 1px solid;' width='90px'>Code</th>
                <th style='border: 1px solid;' width=''>Subject</th>
                <th style='border: 1px solid;' width='80px'>Credit (C)</th>
                <th style='border: 1px solid;' width='80px'>Grade (G)</th>
                <th style='border: 1px solid;' width='40px'>C.G</th>
            </tr>
        </thead>
        <tbody style='border-top: 1px solid; border-bottom: 1px solid;'>
            $htmlBody4
            <tr>
                <td style='border: 1px solid;' align='center' colspan='3'>Jumlah</td>
                <td style='border: 1px solid;' align='center'></td>
                <td style='border: 1px solid;' align='center'></td>
                <td style='border: 1px solid;' align='center'></td>
            </tr>
        </tbody>
    </table>
    <table style='margin-top: 15px; border-collapse: collapse; font-size: 12px;' width='100%'>
        <tbody>
            <tr>
                <td width='250px' align='left'>&nbsp;</td>
                <td width='' align='left'>&nbsp;</td>
                <td width='' style='border: 1px solid;' align='center'>Grade Point Average</td>
                <td width='' style='border: 1px solid;' align='center'>Total Credits</td>
                <td width='' style='border: 1px solid;' align='center'>Total Pass Credits</td>
                <td width='' style='border: 1px solid;' align='center'>C.G</td>
            </tr>
            <tr>
                <td align='left'>&nbsp;</td>
                <td align='left'>General Average</td>
                <td style='border: 1px solid;' align='center'>3.64</td>
                <td style='border: 1px solid;' align='center'>22</td>
                <td style='border: 1px solid;' align='center'>22</td>
                <td style='border: 1px solid;' align='center'>80</td>
            </tr>
            <tr>
                <td align='left'>&nbsp;</td>
                <td align='left'>Grade Point Average</td>
                <td style='border: 1px solid;' align='center'>3.73</td>
                <td style='border: 1px solid;' align='center'>90</td>
                <td style='border: 1px solid;' align='center'>90</td>
                <td style='border: 1px solid;' align='center'>335.80</td>
            </tr>
        </tbody>
    </table>
</div>
";

$body5 = "
<div style='margin-top: 5px;'>
    <table style='text-align: center; border-collapse: collapse; font-size: 9pt;' width='100%'>
        <thead>
            <tr>
                <th style='border: 0;' width='2.5%'><strong>No</strong></th>
                <th style='border: 0;' width='2.5%'><strong>Kode</strong></th>
                <th style='border: 0;' width='33.75%'><strong>Nama Mata Kuliah</strong></th>
                <th style='border: 0;' width='2.5%'><strong>SKS</strong></th>
                <th style='border: 0;' width='2.5%'><strong>Nilai Huruf</strong></th>
                <th style='border: 0;' width='5%'><strong>Total Bobot</strong></th>
                <th style='border: 0;' width='2.5%'></th>
                <th style='border: 0;' width='2.5%'><strong>No</strong></th>
                <th style='border: 0;' width='2.5%'><strong>Kode</strong></th>
                <th style='border: 0;' width='33.75%'><strong>Nama Mata Kuliah</strong></th>
                <th style='border: 0;' width='2.5%'><strong>SKS</strong></th>
                <th style='border: 0;' width='2.5%'><strong>Nilai Huruf</strong></th>
                <th style='border: 0;' width='5%'><strong>Total Bobot</strong></th>
            </tr>
        </thead>
        <tbody>
            $htmlBody5
        </tbody>
    </table>
    <table style='border-collapse: collapse; font-size: 9pt; margin-top:15px' width='100%'>
        <tbody>
            <tr>
                <td> Judul Tugas Akhir</td>
                <td>:</td>
                <td colspan='4'>&nbsp;</td>
            </tr>
            <tr>
                <td colspan='6'>KETERANGAN</td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:&nbsp;</td>
                <td>Satuan Kredit Semester</td>
                <td>Jumlah SKS Yang Diambil</td>
                <td>:</td>
                <td>32</td>
            </tr>
            <tr>
                <td> HM</td>
                <td>:</td>
                <td>Huruf Mutu</td>
                <td>Jumlah SKS Yang lulus</td>
                <td>:</td>
                <td>32</td>
            </tr>
            <tr>
                <td> AM </td>
                <td>:</td>
                <td>Angka Mutu</td>
                <td> Jumlah Mutu</td>
                <td>:</td>
                <td>117</td>
            </tr>
            <tr>
                <td>M</td>
                <td>:</td>
                <td>Mutu</td>
                <td>Index Prestasi Kumulatif (IPK)</td>
                <td>:</td>
                <td>3.66</td>
            </tr>
        </tbody>
    </table>
</div>";