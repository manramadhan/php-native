<?php

// Proses enkripsi
@$pesan_rahasia = $_POST['pesan'];
function enkripsi($pesan_rahasia)
{
    $enkripsi = base64_encode($pesan_rahasia);
    return $enkripsi;
}
$pesan_rahasia = enkripsi($pesan_rahasia);

// Proses dekripsi
@$hasil_pesan = $_POST['deskripsi'];
function deskripsi($hasil_pesan)
{
    $deskripsi = base64_decode($hasil_pesan);
    return $deskripsi;
}
$hasil_pesan = deskripsi($hasil_pesan);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkripsi & Dekripsi</title>
</head>
<body>

    <!-- Form Enkripsi -->
    <form action="" method="POST">
        <div>
            <p>Text yang mau dienkripsi:</p>
            <textarea name="pesan"></textarea>
        </div>
        <div>
            <p>Hasil enkripsi:</p>
            <textarea readonly>
                <?php
                echo @$pesan_rahasia;  // Menampilkan hasil enkripsi
                ?>
            </textarea>
        </div>
        <input type="submit" value="Enkripsi">
    </form>

    <br>

    <!-- Form Dekripsi -->
    <form action="" method="POST">
        <div>
            <p>Text yang mau didekripsi:</p>
            <textarea name="deskripsi"></textarea>
        </div>
        <div>
            <p>Hasil dekripsi:</p>
            <textarea readonly>
                <?php
                echo @$hasil_pesan;  // Menampilkan hasil dekripsi
                ?>
            </textarea>
        </div>
        <input type="submit" value="Dekripsi">
    </form>

</body>
</html>
