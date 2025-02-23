<?php
    // Mengecek apakah cookie mode sudah ada, jika belum set default mode 'terang'
    $mode = isset($_COOKIE['mode']) ? $_COOKIE['mode'] : 'terang';
?>

<html>
    <head>
        <title>Cookie Mode</title>
        <style>
            .gelap {
                background-color: black;
                color: white;
            }
            .terang {
                background-color: white;
                color: black;
            }
        </style>
    </head>
    <body class="<?php echo $mode; ?>">
        <h1>Coba Cookie untuk Mode Gelap/Terang</h1>

        <form method="POST" action="set_mode.php">
            <select name="mode">
                <option value="gelap" <?php echo $mode == 'gelap' ? 'selected' : ''; ?>>Gelap</option>
                <option value="terang" <?php echo $mode == 'terang' ? 'selected' : ''; ?>>Terang</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
