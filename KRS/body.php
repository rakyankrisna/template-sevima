<?php

$htmlBody1 = "";
for ($i = 1; $i < 8; $i++) {
    $htmlBody1 .= "
        <tr>
            <td align='center'>$i.</td>
            <td style='text-align: center;' width='272'>
                <p>MI-1121</p>
            </td>
            <td width='521'>
                <p>Fisika Rekayasa</p>
            </td>
            <td style='text-align: center;' width='135'>
                <p>4</p>
            </td>
        </tr>
    ";
}

$htmlBody2 = "";
for ($i = 1; $i < 8; $i++) {
    $htmlBody2 .= "
    <tr>
        <td style='text-align: center; width: 37px;'>
        $i.
        </td>
        <td style='text-align: center; width: 87.1458px;'>
        <p>3PAI0305</p>
        </td>
        <td style='width: 499.854px;'>
        <p>Psikologi Pendidikan Agama Islam</p>
        </td>
        <td style='text-align: center; width: 42px;'>
        <p>3</p>
        </td>
        <td style='text-align: center; width: 66px;'>
        <p>2PA1A</p>
        </td>
        <td style='width: 251px;'>
        <p>Senin, 10:30 s.d 13:00 @ PAS1</p>
        </td>
    </tr>
    ";
}

$htmlBody3 = "";
for ($i = 1; $i < 8; $i++) {
    $htmlBody3 .= "
        <tr>
            <td align='center'>$i</td>
            <td align='left'>312312</td>
            <td align='left'>BIOLOGI</td>
            <td align='center'>3</td>
            <td align='center'>A</td>
            <td align='center'>4.00</dtd>
            <td align='center'>12</td>
            <td align='center'>LULUS</td>
        </tr>
    ";
}

$htmlBody4 = "";
for ($i = 1; $i < 8; $i++) {
    $htmlBody4 .= "
        <tr>
            <td align='center'>$i</td>
            <td align='left'>312312</td>
            <td align='left'>BIOLOGI</td>
            <td align='center'>3</td>
            <td align='center'>A</td>
            <td align='center'>4.00</td>
            <td align='center'>12</td>
            <td align='center'>LULUS</td>
        </tr>
    ";
}

$htmlBody5 = "";
for ($i = 1; $i < 8; $i++) {
    $htmlBody5 .= "
        <tr>
            <td align='center'>$i</td>
            <td align='left'>312312</td>
            <td align='left'>BIOLOGI</td>
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
        <tbody>
            <tr>
                <td style='text-align: center;' width='122'>
                    <p>NO.</p>
                </td>
                <td style='text-align: center;' width='272'>
                    <p>KODE MK</p>
                </td>
                <td style='text-align: center;' width='521'>
                    <p>NAMA MATAKULIAH</p>
                </td>
                <td style='text-align: center;' width='135'>
                    <p>SKS</p>
                </td>
            </tr>
        <tbody>
            $htmlBody1
        </tbody>
    </table>
</div>";

$body2 = "
<div style='margin-top: 5px;'>
    <table style='border-collapse: collapse; font-size: 14px;' border='1' width='100%'>
<tr>
<td style='text-align: center; width: 37px;'>
<p>NO.</p>
</td>
<td style='text-align: center; width: 87.1458px;'>
<p>KODE</p>
</td>
<td style='text-align: center; width: 499.854px;'>
<p>MATAKULIAH</p>
</td>
<td style='text-align: center; width: 42px;'>
<p>SKS</p>
</td>
<td style='text-align: center; width: 66px;'>
<p>KELAS</p>
</td>
<td style='text-align: center; width: 251px;'>
<p>JADWAL KULIAH</p>
</td>
</tr>
$htmlBody2
</tbody>
</table>
</div>
";
$body3 = '';
$body4 = '';
$body5 = '';
