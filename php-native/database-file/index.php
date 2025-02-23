<?php
    // Bagaimana cara membuat file pakai PHP?
    // $nama_file = 'data.txt';
    //$nama_file = 'siswa.txt';

    //data string
    //$buat_file = fopen($nama_file,'w');

    // Masukan nama salman ke file data.txt
    // Data array
    // $nama = array(
    //     'nama' => 'salman',
    //     'alamat' => 'depok'
    // );
    // $data_json = json_encode($nama);
    // fwrite($buat_file, $data_json);

    // $nama_file = 'siswa.txt';
    // $akses_file = fopen($nama_file, 'r');
    // $ambil_data = fgets($akses_file);
    // $data_array = json_decode($ambil_data, TRUE);
    // print_r($data_array);

    // $data_array = array();
    // $data_array[] = 'kevin';
    // $data_array[] = 'salman';
    
    // $nama_file = 'database.txt';
    // $akses_file = fopen($nama_file, 'w');
    
    // //masukin data array ke file
    // $data_serial = serialize($data_array);
    // fwrite($akses_file, $data_serial);
    
    // $data_baru = 'habib';
    
    // //ambil dulu data yang sudah dimasukkan
    // $akses_file_tambahkan = fopen($nama_file, 'r');
    // $ambil_data = fgets($akses_file_tambahkan);
    // $data_to_array = unserialize($ambil_data);
    // $data_to_array[] = $data_baru;
    
    // //masukkan lagi datanya ke file
    // $data_serial_baru = serialize($data_to_array);
    // fwrite($akses_file, $data_serial_baru);
    
    // print_r($data_to_array);

    // Menggunakan function
    function ambil_data()
    {
        $nama_file = 'database.txt';
        $akses_file_tambah = fopen($nama_file, 'r');
        $ambil_data = fgets($akses_file_tambah);
        $data_to_array = unserialize($ambil_data);
        return $data_to_array;
    }

    function tambah_data($nama)
    {
        $nama_file = 'database.txt';
        // Ambil duku data yang sudah dimasukan
        $akses_file_tambah = fopen($nama_file, 'r');
        $ambil_data = fgets($akses_file_tambah);
        $data_to_array = unserialize($ambil_data);
        $data_to_array[] = $nama;
        
        // Masukkan lagi datanya ke file
        $data_serial_baru = serialize($data_to_array);
        // $akses_file_tambah = fopen($nama_file, 'w');
        fwrite($akses_file_tambah, $data_serial_baru);
    }

?>