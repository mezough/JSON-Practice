<?php 

// decode from Json text to php object

// $json='["name", "address"]';
// var_dump($json);
// echo '<br>';

// $phpArray= json_decode($json);
// var_dump($phpArray);
// echo '<br>';

// foreach($phpArray as $arr){
// echo $arr. '<br>';
// }


// encode from php object to Json text

$phpArray=['name', 'address'];
var_dump($phpArray);
echo '<br>';

$json=json_encode($phpArray);
var_dump($json);
echo '<br>';

foreach($phpArray as $arr){
    echo $arr. '<br>';
    }
    