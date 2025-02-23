<?php
    
    // Anonymous Function
    // (function(){
    //     echo "hello";
    // })();

    // Panggil Function
    // $lihat_nama = function($nama){
    //     echo "nama $nama";
    // };

    // $lihat_nama('firman');

    // Arrow functiom
    // $perkalian = fn ($a, $b) => $a *$b;

    // echo $perkalian(3,3);

    // $data = array(1,2,3);
    // $hasil = array();

    // foreach($data as $d){
    //     $data_baru = $d * 2;
    //     array_push($hasil, $data_baru);
    // }
    // print_r($hasil);

    // // hasil = array_mao(fn ($n) => $d * 2, $data);
    // $data = array(1,2,3);
    // $hasil = array_map(fn($d) => $d * 2, $data);
    // $hasil = array_map(function($d){return $d * 2;}, $data);
    // print_r($hasil);

    //  Closure
    $nama = 'salman';
    $cetak_nama = function() use($nama) {
        $nama = "habib";
        return "nama $nama";
    };

     $cetak_nama();
    echo $nama; 
?>