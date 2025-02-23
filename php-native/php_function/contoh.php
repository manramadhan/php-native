<!DOCTYPE html>

<?php
$list_soal = array(
    array(
        'soal' => 'Soal pertama 1',
        'jawaban' => array(
            'A' => 'Jawaban A',
            'B' => 'Jawaban B',
            'C' => 'Jawaban C',
            'D' => 'Jawaban D',
        ),
    ),
    array(
        'soal' => 'Soal kedua 2',
        'jawaban' => array(
            'A' => 'Jawaban A',
            'B' => 'Jawaban B',
            'C' => 'Jawaban C',
            'D' => 'Jawaban D',
        ),
    ),
);

// $request_user =  Array ( 
//     [soal1] => A 
//     [soal2] => B 
// );

$kunci_jawaban = array('A', 'B');

$hasil = '';
if(isset($_GET)) 
{
    for($i=0; $i<2; $i++)
    {
        $index_inputan = $i+1;
        echo $_GET["soal$index_inputan"];
        // print_r($_GET['soal1']);
    }
}

?>
<html lang="en">
    <head>
        <title>Website Quiz</title>
        <style>
        span {
            color: green;
        }
        
        .tabel1{
            margin: 20px;
            padding: 20px;
        }
        .tabel2{
            margin: 20px;
            padding: 20px;
        }
        .sub{
            border-radius: 5px;
        }
        </style>
    </head>
    <center>
        <body>
            <h1>Kerjakan Soal Berikut ini</h1>
            <form method="GET">
            <?php $i=1; ?>
            <?php foreach($list_soal as $soal): ?>
                <fieldset class="tabel1"><legend><?php echo $soal['soal']; ?></legend>
                
                <?php foreach ($soal['jawaban'] as $k_jb => $v_jb) : ?>
                    <input type="radio" name="soal<?php echo $i; ?>" value="<?php echo $k_jb; ?>" ><?php echo $v_jb; ?> <br>
                <?php endforeach; ?>
                
                </fieldset>
            <?php $i++; ?>
            <?php endforeach; ?>
            <button type="submit">Cek jawaban</button>
            </form>
            <br>
           
           <span>Nilai Kamu adalah ...</span>
           </center>
        </body>
</html>