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
        height: fit-content;
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

        .main {
            width: 100%;
        }

        .container {
            border: none;
            width: 100%
        }

        .hide {
            display: none;
        }
    }
</style>

<!DOCTYPE html>
<html>

<head>
    <title>Custom Report</title>
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
            <!-- input body -->
            <p>Body</p>
            <input type="radio" name="body" value="1" <?php if (isset($_POST['body']) && $_POST['body'] === '1') echo 'checked'; ?>>1<br>
            <input type="radio" name="body" value="2" <?php if (isset($_POST['body']) && $_POST['body'] === '2') echo 'checked'; ?>>2<br>
            <!-- input footer -->
            <p>Footer</p>
            <input type="radio" name="footer" value="1" <?php if (isset($_POST['footer']) && $_POST['footer'] === '1') echo 'checked'; ?>>1<br>
            <input type="radio" name="footer" value="2" <?php if (isset($_POST['footer']) && $_POST['footer'] === '2') echo 'checked'; ?>>2<br>
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
                        echo $body2;
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
                        echo $footer1;
                    endif;
                    ?>
                    <!-- footer 2 -->
                    <?php
                    if ($footer == 2) :
                        echo $footer2;
                    endif;
                    ?>
                <?php
                }
                ?>
            </div>
            <!-- tutup utama     -->
            <div class="container hide" style="background-color: black; overflow-y: scroll; max-height: 600px;">
                <?php
                //
                echo '<pre><code class="language-html">' . htmlspecialchars("<div style='margin-top: 20px; font-family: 'Times New Roman', Times, serif; width: 800; margin: 0 auto;border: 1px solid;padding: 10px;'>");
                //head
                if ($temp_head == 1) {
                    echo htmlspecialchars($header1);
                } elseif ($temp_head == 2) {
                    echo htmlspecialchars($header2);
                }
                //body
                if ($temp_body == 1) {
                    echo htmlspecialchars($body1);
                } elseif ($temp_body == 2) {
                    echo htmlspecialchars($body2);
                }
                //footer
                if ($temp_footer == 1) {
                    echo htmlspecialchars($footer1);
                } elseif ($temp_footer == 2) {
                    echo htmlspecialchars($footer2);
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