<?php

// $data = array();

// $number = 1;
// while($number <= 10)
// {
//     // array_push($data, $number);
//     $data[] = $number;
//     $number++;
// }

// foreach($data as $row)
// {
//     if($row % 2 == 0)
//     {
//         echo $row;
//     }
// }

// print_r($data);

$data = array (
    'nama' => 'firman',
    'alamat' => array(
        'depok' => array(
                'satu' => 'GDC',
                'dua' => 'alun alun',
        ),
        'bekasi' => array(
            'satu' => 'cikunir',
            'dua' => 'jatiwarna',
        )
        ),
    'umur' => 17,
);


// // Mengakses array yang bersarang menggunakan foreach
// foreach($data['alamat']['depok']['cilodong'] as $key => $value){
//     echo ($key). ":" . $value. "<br>";  
// }

?>

<table border="1" cellpadding="5">
    <center>
        <tr>
        <th colspan="2">Alamat</th>
        </tr>
        <?php
        foreach($data['alamat'] as $key_almt => $v_almt){

            $result = '<tr>
            <td colspan="2">'.$key_almt.'</td>
            </tr>
            <tr>
                <td>'.$v_almt['satu'].'</td>
                <td>'.$v_almt['dua'].'</td>
            </tr>';

            echo $result;
        }
        ?>
    </center>
</table>