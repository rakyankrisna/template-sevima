<?php
//include
include('header.php');
include('body.php');
include('footer.php');
?>

<?php
//settings
$tb_width = 800;
$temp_head = 0;
$temp_body = 0;
?>

<!-- Style Utama -->
<style>
    :root {
        --font-utama: Arial, Helvetica, sans-serif;
    }

    p {
        margin: 0;
    }

    .container {
        font-family: var(--font-utama);
        width: <?= $tb_width ?>;
        margin: 0 auto;
        border: 1px solid;
        padding: 10px;
    }

    @media print {
        .input_header {
            display: none;
        }

        .container {
            border: none;
        }

    }
</style>

<form action="#" method="POST">
    <!-- input header -->
    <div class="input_header">
        <p>Header</p>
        <input type="radio" name="header" value="1" <?php if (isset($_POST['header']) && $_POST['header'] === '1') echo 'checked'; ?>>1<br>
        <input type="radio" name="header" value="2" <?php if (isset($_POST['header']) && $_POST['header'] === '2') echo 'checked'; ?>>2<br>
        <input type="radio" name="header" value="3" <?php if (isset($_POST['header']) && $_POST['header'] === '3') echo 'checked'; ?>>3<br>
        <input type="radio" name="header" value="4" <?php if (isset($_POST['header']) && $_POST['header'] === '4') echo 'checked'; ?>>4<br>
        <input type="radio" name="header" value="5" <?php if (isset($_POST['header']) && $_POST['header'] === '5') echo 'checked'; ?>>5<br>
        <!-- input body -->
        <p>Body</p>
        <input type="radio" name="body" value="1" <?php if (isset($_POST['body']) && $_POST['body'] === '1') echo 'checked'; ?>>1<br>
        <input type="radio" name="body" value="2" <?php if (isset($_POST['body']) && $_POST['body'] === '2') echo 'checked'; ?>>2<br>
        <input type="radio" name="body" value="3" <?php if (isset($_POST['body']) && $_POST['body'] === '3') echo 'checked'; ?>>3<br>
        <input type="radio" name="body" value="4" <?php if (isset($_POST['body']) && $_POST['body'] === '4') echo 'checked'; ?>>5<br>
        <input type="radio" name="body" value="5" <?php if (isset($_POST['body']) && $_POST['body'] === '5') echo 'checked'; ?>>5<br>
        <!-- input footer -->
        <p>Footer</p>
        <input type="radio" name="footer" value="1" <?php if (isset($_POST['footer']) && $_POST['footer'] === '1') echo 'checked'; ?>>1<br>
        <input type="radio" name="footer" value="2" <?php if (isset($_POST['footer']) && $_POST['footer'] === '2') echo 'checked'; ?>>2<br>
        <input type="radio" name="footer" value="3" <?php if (isset($_POST['footer']) && $_POST['footer'] === '3') echo 'checked'; ?>>3<br>
        <input type="radio" name="footer" value="4" <?php if (isset($_POST['footer']) && $_POST['footer'] === '4') echo 'checked'; ?>>5<br>
        <input type="radio" name="footer" value="5" <?php if (isset($_POST['footer']) && $_POST['footer'] === '5') echo 'checked'; ?>>5<br>
        <!-- submit -->
        <input type="submit" value="Submit">
    </div>
</form>

<!-- buka utama     -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
?>
    <div class="container">
        <?php
        //header
        if (isset($_POST['header'])) {
            $head = $_POST['header'];
            $temp_head = $head;
        ?>

            <!-- header 1 -->
            <?php
            if ($head == 1) :
                echo $header1;
            endif;
            ?>
            <!-- header 2 -->
            <?php
            if ($head == 2) :
                echo $header2;
            endif;
            ?>
            <!-- header 3 -->
            <?php
            if ($head == 3) :
                echo $header3;
            endif;
            ?>
            <!-- header 4 -->
            <?php
            if ($head == 4) :
                echo $header4;
            endif;
            ?>
            <!-- header 5 -->
            <?php
            if ($head == 5) :
                echo $header5;
            endif;
            ?>


        <?php
        }
        ?>

        <?php
        if (isset($_POST['body'])) {
            $body = $_POST['body'];
            $temp_body = $body;
        ?>
            <!-- body 1 -->
            <?php
            if ($body == 1) :
                echo $body1;
            endif;
            ?>
            <!-- body 2 -->
            <?php
            if ($body == 2) :
                var_dump($body);
            endif;
            ?>
            <!-- body 3 -->
            <?php
            if ($body == 3) :
                var_dump($body);
            endif;
            ?>
            <!-- body 4 -->
            <?php
            if ($body == 4) :
                var_dump($body);
            endif;
            ?>
            <!-- body 5 -->
            <?php
            if ($body == 5) :
                var_dump($body);
            endif;
            ?>

        <?php
        }
        ?>

        <?php
        if (isset($_POST['footer'])) {
            $footer = $_POST['footer'];
        ?>
            <!-- footer 1 -->
            <?php
            if ($footer == 1) :
            ?>
                <div style="margin-top: 20px;">
                    <table width="100%" style="border-collapse: collapse; font-size: 12px;">
                        <tbody>
                            <tr>
                                <td width="" style="font-weight: bold;">Indeks Prestasi</td>
                                <td width="250px">Surakarta, 8 Februari 2023</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Beban SKS Maks Sem. yang akan Datang 12</td>
                                <td>PEMBIMBING AKADEMIK</td>
                            </tr>
                            <?php
                            for ($i = 0; $i < 4; $i++) {
                            ?>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td></td>
                                <td><u>Dr.Fulan S.MG</u></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>NIDN. 10391031203</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php
            endif;
            ?>
            <!-- footer 2 -->
            <?php
            if ($footer == 2) :
                var_dump($footer);
            endif;
            ?>
            <!-- footer 3 -->
            <?php
            if ($footer == 3) :
                var_dump($footer);
            endif;
            ?>
            <!-- footer 4 -->
            <?php
            if ($footer == 4) :
                var_dump($footer);
            endif;
            ?>
            <!-- footer 5 -->
            <?php
            if ($footer == 5) :
                var_dump($footer);
            endif;
            ?>

        <?php
        }
        ?>
    </div>
    <!-- tutup utama     -->
    <div class="container" style="margin-top: 20px;">
        <?php
        //
        echo htmlentities("<div style='margin-top: 20px; font-family: 'Times New Roman', Times, serif; width: 800; margin: 0 auto;border: 1px solid;padding: 10px;'>");
        //head
        if ($temp_head == 1) {
            echo htmlentities($header1);
        } elseif ($temp_head == 2) {
            echo htmlentities($header2);
        } elseif ($temp_head == 3) {
            echo htmlentities($header3);
        } elseif ($temp_head == 4) {
            echo htmlentities($header4);
        } else {
            echo htmlentities($header5);
        }
        //body
        if ($temp_body == 1) {
            echo htmlentities($body1);
        } elseif ($temp_body == 2) {
            echo htmlentities($body2);
        } elseif ($temp_body == 3) {
            echo htmlentities($body3);
        } elseif ($temp_body == 4) {
            echo htmlentities($body4);
        } else {
            echo htmlentities($body5);
        }
        //
        echo htmlentities("</div>");
        ?>
    </div>
<?php
}
?>