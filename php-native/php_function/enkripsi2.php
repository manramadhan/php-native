<?php

// ENKRIPSI

@$enkrip = $_GET['enkripsi'];
function enkripsi($enkrip) {
    $array_dari_salma = str_split($enkrip);
    $hasil = '';

    foreach($array_dari_salma as $c) {
        switch ($c)
        {
            case 's':
                $hasil .= 'b';
            break;
            case 'a':
                $hasil .= 'm';
            break;
            case 'l':
                $hasil .= 'w';
            break;
            case 'm':
            break;
        }
    }

    return $hasil;
}
$hasil_enkrip = enkripsi($enkrip);

// DEKRIPSI

@$dekrip = $_GET['dekripsi'];
function dekripsi($dekrip) {
    $array_dari_bmw3m = str_split($dekrip);
    $hasil = '';

    foreach($array_dari_bmw3m as $c) {
        switch ($c)
        {
            case 'b':
                $hasil .= 's';
            break;
            case 'm':
                $hasil .= 'a';
            break;
            case 'w':
                $hasil .= 'l';
            break;
            case '3':
                $hasil .= 'm';
            break;
        }
    }

    return $hasil;
}
$hasil_dekrip = dekripsi($dekrip);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENKRIPSI CUSTOM</title>
</head>
<body>
    <form action="custom_encrypt.php" method="get">
        <!-- ENKRIP SALMA -->
        <label>Text yang mau di enkripsi</label>                                <br>
        <input type="text" name="enkripsi">                                     <br>
        <label>Hasil pesan yang di enkripsi</label>                             <br>
        <input type="text" readonly value="<?php echo $hasil_enkrip; ?>">       <br>
        <input type="submit" value="submit">                                    <br>
        <!-- DEKRIP SALMA -->
        <label>Text yang mau di dekripsi</label>                                <br>
        <input type="text" name="dekripsi" value="<?php echo $hasil_enkrip ?>"> <br>
        <label>Hasil pesan yang di dekripsi</label>                             <br>
        <input type="text" readonly value="<?php echo $hasil_dekrip; ?>">       <br>    
        <input type="submit" value="submit">                                    <br>
    </form>
</body>
</html>