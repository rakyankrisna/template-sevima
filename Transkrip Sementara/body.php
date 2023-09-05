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
for ($i = 1; $i < 4; $i++) {
    $j = $i + 3;
    $htmlBody4 .= "
    <tr>
        <td style='border: 1px solid; padding:4px;' align='center'>$i</td>
        <td style='border: 1px solid; padding:4px;' align='center'>20220205</td>
        <td style='border: 1px solid; padding:4px;' align='left'>Dasar-Dasar Berbicara</td>
        <td style='border: 1px solid; padding:4px;' align='center'>B</td>
        <td style='border: 1px solid; padding:4px;' align='center'>3.00</td>
        <td style='border: 1px solid; padding:4px;' align='center'>3</td>
        <td style='border: 1px solid; padding:4px;' align='center'>9</td>
        <td></>
        <td style='border: 1px solid; padding:4px;' align='center'>$j</td>
        <td style='border: 1px solid; padding:4px;' align='center'>20220205</td>
        <td style='border: 1px solid; padding:4px;' align='left'>Dasar-Dasar Berbicara</td>
        <td style='border: 1px solid; padding:4px;' align='center'>B</td>
        <td style='border: 1px solid; padding:4px;' align='center'>3.00</td>
        <td style='border: 1px solid; padding:4px;' align='center'>3</td>
        <td style='border: 1px solid; padding:4px;' align='center'>9</td>
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
    <table style='border-collapse: collapse; font-size: 7.5pt; margin-top:15px' width='100%'>
        <tbody>
            <tr>
                <td width='30%'><strong>ACCUMULATED CREDITS</strong></td>
                <td width='1%'><strong>:</strong></td>
                <td width='69%%'><strong>36</strong></td>
            </tr>
            <tr>
                <td><strong>TOTAL ACCUMULATED</strong></td>
                <td><strong>:</strong></td>
                <td><strong>141.3</strong></td>
            </tr>
            <tr>
                <td><strong>GRADE POINT AVERAGE (GPAS)</strong></td>
                <td><strong>:</strong></td>
                <td><strong>3.93</strong></td>
            </tr>
        </tbody>
    </table>
    <table style='border-collapse: collapse; font-size: 7.5pt; margin-top:15px' width='100%'>
        <tbody>
            <tr>
                <td width='5%'><strong>NOTE</strong></td>
                <td width='5%'><strong></strong></td>
                <td width='90%'><strong></strong></td>
            </tr>
            <tr>
                <td width='5%'><strong>G</strong></td>
                <td width='5%'><strong>=</strong></td>
                <td width='90%'><strong>Grade</strong></td>
            </tr>
            <tr>
                <td width='5%'><strong>GV</strong></td>
                <td width='5%'><strong>=</strong></td>
                <td width='90%'><strong>Grade Value</strong></td>
            </tr>
            <tr>
                <td width='5%'><strong>AG</strong></td>
                <td width='5%'><strong>=</strong></td>
                <td width='90%'><strong>Accumulated Grade</strong></td>
            </tr>
            <tr>
                <td width='5%'><strong>C</strong></td>
                <td width='5%'><strong>=</strong></td>
                <td width='90%'><strong>Credit Unit</strong></td>
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
<div style='margin-top: 20px;'>
    <table style='text-align: center; border-collapse: collapse; font-size: 7.5pt;' width='100%'>
        <thead>
            <tr>
                <th style='border: 1px solid;' width='2%'><strong>NO</strong></th>
                <th style='border: 1px solid;' width='2%'><strong>KODE</strong></th>
                <th style='border: 1px solid;' width='33.75%'><strong>MATA KULIAH</strong></th>
                <th style='border: 1px solid;' width='2%'><strong>NILAI</strong></th>
                <th style='border: 1px solid;' width='2%'><strong>A.M</strong></th>
                <th style='border: 1px solid;' width='2%'><strong>SKS</strong></th>
                <th style='border: 1px solid;' width='5%'><strong>BOBOT</strong></th>
                <th style='border: 0;' width='1%'></th>
                <th style='border: 1px solid;' width='2%'><strong>NO</strong></th>
                <th style='border: 1px solid;' width='2%'><strong>KODE</strong></th>
                <th style='border: 1px solid;' width='33.75%'><strong>MATA KULIAH</strong></th>
                <th style='border: 1px solid;' width='2%'><strong>NILAI</strong></th>
                <th style='border: 1px solid;' width='2%'><strong>A.M</strong></th>
                <th style='border: 1px solid;' width='2%'><strong>SKS</strong></th>
                <th style='border: 1px solid;' width='5%'><strong>BOBOT</strong></th>
            </tr>
        </thead>
        <thead>
            <tr>
                    <th style='border: 1px solid;' width='2%'><i>No</i></th>
                    <th style='border: 1px solid;' width='2%'><i>Code</i></th>
                    <th style='border: 1px solid;' width='33.75%'><i>Subject</i></th>
                    <th style='border: 1px solid;' width='2%'><i>Value</i></th>
                    <th style='border: 1px solid;' width='2%'><i>Scores</i></th>
                    <th style='border: 1px solid;' width='2%'><i>Credit</i></th>
                    <th style='border: 1px solid;' width='5%'><i>Grade</i></th>
                    <th style='border: 0;' width='1%'></th>
                    <th style='border: 1px solid;' width='2%'><i>No</i></th>
                    <th style='border: 1px solid;' width='2%'><i>Code</i></th>
                    <th style='border: 1px solid;' width='33.75%'><i>Subject</i></th>
                    <th style='border: 1px solid;' width='2%'><i>Value</i></th>
                    <th style='border: 1px solid;' width='2%'><i>Scores</i></th>
                    <th style='border: 1px solid;' width='2%'><i>Credit</i></th>
                    <th style='border: 1px solid;' width='5%'><i>Grade</i></th>
                </tr>
        </thead>
        <tbody>
            $htmlBody4
        </tbody>
    </table>
    <table style='border-collapse: collapse; font-size: 7.5pt; margin-top:15px' width='100%'>
        <tbody>
            <tr>
                <td> Judul Proyek Akhir</td>
                <td>:</td>
                <td colspan='4'>&nbsp;</td>
            </tr>
            <tr>
                <td colspan='6'>KETERANGAN</td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
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
            <tr>
                <td>Keterangan Nilai</td>
                <td>:</td>
                <td>A=4, B=3, C=2, D=1, E=0</td>
                <td>Predikat</td>
                <td>:</td>
                <td>Cumlaude</td>
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