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
for ($i = 1; $i < 8; $i++) {
    $htmlBody2 .= "
    <tr>
        <td style='border: 1px solid; padding:4px;' align='center'>$i</td>
        <td style='border: 1px solid; padding:4px;' align='left'>Fisika Rekayasa</td>
        <td style='border: 1px solid; padding:4px;' align='center'>2</td>
        <td style='border: 1px solid; padding:4px;' align='center'>2.00</td>
        <td style='border: 1px solid; padding:4px;' align='center'>A</td>
        <td style='border: 1px solid; padding:4px;' align='center'>4</td>
        <td style='border: 1px solid; padding:4px;' align='center'>2</td>
        <td style='border: 1px solid; padding:4px;' align='center'>2</td>
        <td style='border: 1px solid; padding:4px;' align='center'>LULUS</td>
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
for ($i = 1; $i < 8; $i++) {
    $htmlBody5 .= "
    <tr>
        <td style='border: 1px solid; padding:4px;' align='center'>$i</td>
        <td style='border: 1px solid; padding:4px;' align='center'>312312</td>
        <td style='border: 1px solid; padding:4px;' align='left'>Fisika Rekayasa</td>
        <td style='border: 1px solid; padding:4px;' align='center'>3</td>
        <td style='border: 1px solid; padding:4px;' align='center'>A</td>
        <td style='border: 1px solid; padding:4px;' align='center'>6.9</td>
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
<div style='margin-top: 15px;'>
    <table style='border-collapse: collapse; font-size: 14px;' width='100%'>
        <thead>
            <tr>
                <th style='border: 1px solid;' width='40px' rowspan='2'>NO</th>
                <th style='border: 1px solid;' width='' rowspan='2'>MATA KULIAH</th>
                <th style='border: 1px solid;' width='60px' rowspan='2'>SKS</th>
                <th style='border: 1px solid;' width='' colspan='2'>NILAI</th>
                <th style='border: 1px solid;' width='60px' rowspan='2'>SKSN</th>
                <th style='border: 1px solid;' width='60px' rowspan='2'>SKSD</th>
                <th style='border: 1px solid;' width='70px' rowspan='2'>Rencana Ke</th>
                <th style='border: 1px solid;' width='80px' rowspan='2'>Ket.</th>
            </tr>
            <tr>
                <th style='border: 1px solid;' width='60px'>Angka</th>
                <th style='border: 1px solid;' width='60px'>Huruf</th>
            </tr>
        </thead>
        <tbody>
            $htmlBody2
        </tbody>
    </table>
    <table width='100%' style='text-align: center; margin-top: 15px; border-collapse: collapse; font-size: 14px;'>
        <thead>
            <tr>
                <th width='' style='border: 1px solid; text-align: left; padding:4px;'>Jumlah</th>
                <th width='100px' style='border: 1px solid;'>SKS</th>
                <th width='100px' style='border: 1px solid;'>SKS Dicapai</th>
                <th width='100px' style='border: 1px solid;'>SKS X Nilai</th>
                <th width='100px' style='border: 1px solid;'>IP</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style='border: 1px solid;  text-align: left; padding:4px;'>Semester Ini</td>
                <td style='border: 1px solid;'>19</td>
                <td style='border: 1px solid;'>17</td>
                <td style='border: 1px solid;'>49</td>
                <td style='border: 1px solid;'>2.58</td>
            </tr>
            <tr>
                <td style='border: 1px solid;  text-align: left; padding:4px;'>Kumulatif</td>
                <td style='border: 1px solid;'>141</td>
                <td style='border: 1px solid;'>131</td>
                <td style='border: 1px solid;'>395</td>
                <td style='border: 1px solid;'>2.90</td>
            </tr>
        </tbody>
    </table>
    <table width='100%' style='margin-top: 25px; border-collapse: collapse; font-size: 14px;'>
        <tr>
            <td></td>
            <td style=' font-weight: bold;'>Keterangan:</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>SKS</td>
            <td>:</td>
            <td>Satuan Kredit Semester</td>
        </tr>
        <tr>
            <td></td>
            <td>SKSN</td>
            <td>:</td>
            <td>SKS x Nilai</td>
        </tr>
        <tr>
            <td width='70px'></td>
            <td width='190px'>SKSD</td>
            <td width=''>:</td>
            <td width=''>SKS yang dicapai</td>
        </tr>
        <tr>
            <td></td>
            <td>SKS Semester</td>
            <td>:</td>
            <td>SKS yang dicapai semester ini</td>
        </tr>
        <tr>
            <td></td>
            <td>SKS Kumulatif</td>
            <td>:</td>
            <td>Total SKS yang Dicapai</td>
        </tr>
        <tr>
            <td></td>
            <td>IP Semester</td>
            <td>:</td>
            <td>Indeks Prestasi Semester</td>
        </tr>
        <tr>
            <td></td>
            <td>IP Kumulatif</td>
            <td>:</td>
            <td>Indeks Prestasi Kumulatif</td>
        </tr>
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
<div style='margin-top: 15px;'>
<table style='border-collapse: collapse; font-size: 12px; text-align: center;' width='100%'>
    <thead style='border-top: 1px solid; border-bottom: 1px solid;'>
        <tr>
            <th style='border: 1px solid;' width='40px'>No.</th>
            <th style='border: 1px solid;' width='50px'>Course Code</th>
            <th style='border: 1px solid;' width=''>Course Name</th>
            <th style='border: 1px solid;' width='80px'>Credit Unit</th>
            <th style='border: 1px solid;' width='80px'>Grade</th>
            <th style='border: 1px solid;' width='170px'>Weighted Score</th>
        </tr>
    </thead>
    <tbody style='border-top: 1px solid; border-bottom: 1px solid;'>
        $htmlBody5
        <tr>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
        </tr>
        <tr>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
        </tr>
        <tr>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center' colspan='2'>Credit Units for this Semester</td>
            <td style='border: 1px solid;' align='center'>19</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
        </tr>
        <tr>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center' colspan='2'>Grade Point Average for this Semester</td>
            <td style='border: 1px solid;' align='center'>2.46</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
        </tr>
        <tr>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center' colspan='2'>Credit Units Cumulative</td>
            <td style='border: 1px solid;' align='center'>37</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
        </tr>
        <tr>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center' colspan='2'>Grade Point Average Cumulative</td>
            <td style='border: 1px solid;' align='center'>2.79</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
            <td style='border: 1px solid;' align='center'>&nbsp;</td>
        </tr>

    </tbody>
</table>
<table style='border-collapse: collapse; font-size: 12px; margin-top:15px' width='100%'>
    <tbody>
        <tr>
            <td width='240px' style='font-weight: bold;'>Cc:</td>
            <td width='210px'></td>
            <td width='' style='text-align: center;'></td>
        </tr>
        <tr>
            <td style='font-weight: bold;'>1. Student</td>
            <td width=''></td>
            <td width=''></td>
        </tr>
        <tr>
            <td style='font-weight: bold;'>2. Academic Operations</td>
            <td width=''></td>
            <td></td>
        </tr>
    </tbody>
</table>
</div>
";
