<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian</title>
</head>
<body>
    <center>
        <h1>tabel perkalian</h1>
        <table border="1" cellpadding="10">
            <?php
            $num1 = 1;
            while($num1 <= 10)
            {
                echo'<tr>';
                $num2 = 1;
                while($num2 <= 10)
                {
                   $result = $num1 * $num2;

                    if($result %2 == 0) {
                        echo "<td style ='background-color:red;'>". $result ."</td>";
                    } else {
                        echo "<td>". $result ."</td>";
                    }
                    $num2++;
                }
                echo '</tr>';
                $num1++;
            }
            
            ?>
        </table>
    </center>
</body>
</html>



            <?php
               $i = 0;
                while($i < count($data)){
                    echo $data[$i]."<br>";
                    $i++;
                }
                ?>