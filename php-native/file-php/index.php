<?php
    $ambil_tmp_file = $_FILES['file-upload']['tmp_name'];
    $ambil_nama_file = $_FILES['file-upload']['name'];
    $tujuan_folder = 'uploads/';
    $target_file = $tujuan_folder . basename($ambil_nama_file);

    // pindahkan dari tmp ke tujuan 
    $upload_file = move_uploaded_file($ambil_tmp_file, $target_file);

    echo '<pre>';
    print_r($upload_file);
    echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type="submit"]{
            background-color: blue;
            color: white;
            width: 300px;
            padding: 10px 0;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="file" name="file-upload" required> <br><br>
        <input type="submit" value="upload">
    </form>
    <img width="300px" src="macbook.png" alt="">
</body>
</html>