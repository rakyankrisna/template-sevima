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
$temp_footer = 0;
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
        border: 1px solid;
        padding: 10px;
        height: 600px;
    }

    .main {
        display: flex;
        justify-content: center;
        gap: 30px;
        align-items: center;
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

<!DOCTYPE html>
<html>

<head>
    <title>Prism.js Example</title>
    <link rel="stylesheet" type="text/css" href="../Prism/prism.css">
    <script type="text/javascript" src="../Prism/prism.js"></script>
</head>

<body>
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
            <input type="radio" name="body" value="4" <?php if (isset($_POST['body']) && $_POST['body'] === '4') echo 'checked'; ?>>4<br>
            <input type="radio" name="body" value="5" <?php if (isset($_POST['body']) && $_POST['body'] === '5') echo 'checked'; ?>>5<br>
            <!-- input footer -->
            <p>Footer</p>
            <input type="radio" name="footer" value="1" <?php if (isset($_POST['footer']) && $_POST['footer'] === '1') echo 'checked'; ?>>1<br>
            <input type="radio" name="footer" value="2" <?php if (isset($_POST['footer']) && $_POST['footer'] === '2') echo 'checked'; ?>>2<br>
            <input type="radio" name="footer" value="3" <?php if (isset($_POST['footer']) && $_POST['footer'] === '3') echo 'checked'; ?>>3<br>
            <input type="radio" name="footer" value="4" <?php if (isset($_POST['footer']) && $_POST['footer'] === '4') echo 'checked'; ?>>4<br>
            <input type="radio" name="footer" value="5" <?php if (isset($_POST['footer']) && $_POST['footer'] === '5') echo 'checked'; ?>>5<br>
            <!-- submit -->
            <input type="submit" value="Submit">
        </div>
    </form>

    <!-- buka utama     -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
        <div class="main">
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
                    $temp_footer = $footer;
                ?>
                    <!-- footer 1 -->
                    <?php
                    if ($footer == 1) :
                        var_dump($footer1);
                    endif;
                    ?>
                    <!-- footer 2 -->
                    <?php
                    if ($footer == 2) :
                        var_dump($footer2);
                    endif;
                    ?>
                    <!-- footer 3 -->
                    <?php
                    if ($footer == 3) :
                        var_dump($footer3);
                    endif;
                    ?>
                    <!-- footer 4 -->
                    <?php
                    if ($footer == 4) :
                        var_dump($footer4);
                    endif;
                    ?>
                    <!-- footer 5 -->
                    <?php
                    if ($footer == 5) :
                        var_dump($footer5);
                    endif;
                    ?>

                <?php
                }
                ?>
            </div>
            <!-- tutup utama     -->
            <div class="container" style="background-color: black; overflow-y: scroll;">
                <?php
                //
                echo '<pre><code class="language-html">' . htmlspecialchars("<div style='margin-top: 20px; font-family: 'Times New Roman', Times, serif; width: 800; margin: 0 auto;border: 1px solid;padding: 10px;'>");
                //head
                if ($temp_head == 1) {
                    echo htmlspecialchars($header1);
                } elseif ($temp_head == 2) {
                    echo htmlspecialchars($header2);
                } elseif ($temp_head == 3) {
                    echo htmlspecialchars($header3);
                } elseif ($temp_head == 4) {
                    echo htmlspecialchars($header4);
                } else {
                    echo htmlspecialchars($header5);
                }
                //body
                if ($temp_body == 1) {
                    echo htmlspecialchars($body1);
                } elseif ($temp_body == 2) {
                    echo htmlspecialchars($body2);
                } elseif ($temp_body == 3) {
                    echo htmlspecialchars($body3);
                } elseif ($temp_body == 4) {
                    echo htmlspecialchars($body4);
                } else {
                    echo htmlspecialchars($body5);
                }
                //footer
                if ($temp_footer == 1) {
                    echo htmlspecialchars($footer1);
                } elseif ($temp_footer == 2) {
                    echo htmlspecialchars($footer2);
                } elseif ($temp_footer == 3) {
                    echo htmlspecialchars($footer3);
                } elseif ($temp_footer == 4) {
                    echo htmlspecialchars($footer4);
                } else {
                    echo htmlspecialchars($footer5);
                }

                echo htmlspecialchars("</div>") . '</pre></code>';
                ?>
            </div>
        </div>
    <?php
    }
    ?>
</body>

</html>