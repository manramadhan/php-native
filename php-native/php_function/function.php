<?php

// hello(){
//     function run_say_hello()
//     {
//         echo 'hello world';
//     }
// }

// run_say_hello();


// $say_hello = false;

// if($say_hello == false){
//     function run_say_hello()
//     {
//         echo 'hello world';
//     }
// }

// run_say_hello();

// $a=2;
// $b=2;

// if($a == $b){
//     echo 'diterima';
// }
// else 
// {
//     echo 'ditolak';
// }


// function apaaja1()
// { 
//     echo 'apaaja1';
//     function apaaja2(){
//     echo 'apaaja2';
//     }
// }
// apaaja1();
// apaaja2();

// function bilangan_1()
// {
//     global $bilangan_1;
//     $bilangan_1 = 3;
// }

// function bilangan_2()
// {
//     global $bilangan_2;
//     $bilangan_2 = 4;
// }

// bilangan_1();
// bilangan_2();
// echo $bilangan_1 + $bilangan_2;
// // print_r ($GLOBALS);

// Parameter fungsi
// function kalkulator($bil1, $bil2, $bil3, $bil4, $operator)
// {
//     switch ($operator)
//     {
//         case '+':
//             return $bil1 + $bil2;
//         break;
//         case '*':
//             return $bil1 * $bil2;
//         break;
//         case '/':
//             return $bil1 / $bil2;
//         break;
//     }
// }

// echo kalkulator (1, 2, '+', '*', '/');

// $nomor = 5;
// echo kalkulator(7);

// function kalkulator(...$nomor)
// {
//     print_r($nomor);
// }
// kalkulator(1,2,3,4);
// echo '<br>';
// kalkulator(1,2,3,4,5);

function kalikan(...$nomor){
    $hasil = 0;
    $i = 0;
    foreach ($nomor as $n)
    {
        if($i == 0)
        {
            $hasil = $n;
        }
        else
        {
            $hasil = $hasil * $n;
        }
        $i++;
    }
    echo $hasil;
}

kalikan(1,2,3); echo '<br>';
kalikan(2,3,4,1); echo '<br>';