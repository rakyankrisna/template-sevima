<?php

$htmlBody = "";
for ($i = 1; $i < 8; $i++) {
    $htmlBody .= "
        <tr>
            <td align='center'>$i</td>
            <td align='left'>BIOLOGI</td>
            <td align='left'>312312</td>
            <td align='center'>3</td>
            <td align='center'>A</td>
            <td align='center'>4.00</td>
            <td align='center'>12</td>
            <td align='center'>LULUS</td>
        </tr>
    ";
}

$body1 = " 
<div style='margin-top: 5px;'>
    <table style='border-collapse: collapse; font-size: 14px;' border='1' width='100%'>
        <thead>
            <tr>
                <th width='40px' rowspan='2'>No.</th>
                <th width='' rowspan='2'>NAMA MATA KULIAH</th>
                <th width='90px' rowspan='2'>KODE</th>
                <th width='50px' rowspan='2'>SKS</th>
                <th width='' colspan='3'>NILAI AKHIR</th>
                <th width='140px' rowspan='2'>Ket</th>
            </tr>
            <tr>
                <th width='50px'>HM</th>
                <th width='50px'>NM</th>
                <th width='50px'>KN</th>
            </tr>
        </thead>
        <tbody>
            $htmlBody
            <tr>
                <td colspan='3' align='center'>JUMLAH</td>
                <td align='center'>20</td>
                <td align='center'></td>
                <td align='center'></td>
                <td align='center'>12</td>
                <td align='center'></td>
            </tr>
        </tbody>
    </table>
</div>";

$body2 = '';
$body3 = '';
$body4 = '';
$body5 = '';
