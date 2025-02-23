<html>
<?php

$nama = array(
    'Abdulloh kuswardanu',
    'Nur wahid aidil nugroho',
    'Habib husain nurrohim',
    'Kevin adi surya nugraha',
    'Salman zulkarnain',
    'Muhammad rifai fadli adzim amril',
    'Rafif dwi prayata',
    'Handika tia saputro',
    'Ali zainal abidin sahab',
    'Firman ramadhan',
);
?>
    <body>
    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
                <?php
                $no = 0;
                $i = 0;
                while($no < count ($nama)) {
                    echo "<tr>"; 
                    echo "<td>". ($no + 1 ). "</td>";
                    echo "<td>". $nama [$no]. "</td>"; 
                    $no++;
                }
                ?>
    </table>
    </body>
</html>
