<?php

// markigame manipulasi data array :)
$data = array();

// tambah data
$data[] = 'salman';
$data[] = 'habib';
$data[] = 'rifai';
$data[] = 'kevin';
$data[] = 'ali';
$data[] = 'firman';
$data[] = 'rafif';
$data[] = 'abdul';
$data[] = 'aidil';
$data[] = 'dika';

/* peraturan
- Tidak boleh edit $data secara manual
*/

// 1.Tambah data nama 'budi' di akhir data
$data[] = 'budi';
// 2.Tambah data nama 'rudi' pada urutan ke 3
$data[2] = 'rudi';
// 3.Ubah data 'firman' menjadi 'ronaldo'
$data[5] = 'ronaldo';
// 4.Ubah data 'rafif' menjadi 'messi'
$data[6] = 'messi';
// 5.Hapus data 'abdul' dan tambah data 'mbappe' pada urutan ke 6
unset($data[7]);
$data[5] = 'mbappe';
// 6.Urutkan data dari A ke Z
sort($data);
// 7.Urutkan data dar Z ke A
rsort($data);
// 8.Pindahkan data 'kevin' jadi data yang pertama
$data[0] = 'kevin';
$data[4] = 'salman';
// 9.Pindahkan data 'dika' jadi data terakhir
$data[6] = 'aidil';
$data[9] = 'dika';
// 10.Tambahkan 'FC' pada tiap-tiap nama
$data[0] = 'kevin FC';
$data[1] = 'rudi FC';
$data[2] = 'messi FC';
$data[3] = 'mbappe FC';
$data[4] = 'salman FC';
$data[5] = 'habib FC';
$data[6] = 'aidil FC';
$data[7] = 'budi FC';
$data[8] = 'ali FC';
$data[9] = 'dika FC';

 $data = array(
     "group_1" => array(
         $data[0],
         $data[1],
         $data[2],
         $data[3],
         $data[4],
     ),
     "group_2" => array(
         $data[5],
         $data[6],
         $data[7],
         $data[8],
         $data[9],
    )
 );

// 12.Urutkan group pertama ascending dan group ke dua descending
sort($data["group_1"]);
rsort($data["group_2"]);

// 13.Pindahkan messi FC ke group 2 dan habib FC ke group 1
$data = array(
    "group_1" => array(
    'kevin FC', 
    'rudi FC', 
    'habib FC', 
    'mbappe FC', 
    'salman FC'
    ), 
    "group_2" => array(
    'messi FC',
    'aidil FC', 
    'budi FC', 
    'ali FC', 
    'dika FC'
    )
);

$data['group_2'][] = 'david FC';

// hasilnya 
echo '<pre>';
print_r($data);
echo '</pre>';