<?php
//materi array
// $data = ['nyaul', 'wayan', 'pei'];
// print_r($data[1]);
// $data = array('nama' => array('nyaul', 'wayan', 'abdul'),
// 'umur' => 20 
// );
// print_r($data['umur']);
// print_r($_GET);

$bilangan_1 = $_POST['bil_1'];
$bilangan_2 = $_POST['bil_2'];
$operator = $_POST['operator'];

if($operator == 'tambah')
{
    $result = $bilangan_1 + $bilangan_2;
    echo $result;
}
elseif ($operator == 'kurang')
{
    $result = $bilangan_1 - $bilangan_2;
    echo $result;
}
elseif ($operator == 'bagi')
{
    $result = $bilangan_1 / $bilangan_2;
    echo $result;
}
elseif ($operator == 'kali')
{
    $result = $bilangan_1 * $bilangan_2;
    echo $result;
}


?>

<html>
    <head>
        <title>kalkulator ku</title>
    </head>
    <body>
        <form method="POST">
            <input type="number" name="bil_1" placeholder="bilangan satu"> <br> <br>
            <input type="number" name="bil_2" placeholder="bilangan dua"> <br> <br>
            <select name="operator" id="">
                <option value="tambah">Tambah</option>
                <option value="kurang">Kurang</option>
                <option value="bagi">Bagi</option>
                <option value="kali">kali</option>
            </select>
            <br>
            <br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>