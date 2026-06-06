<?php

$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
  [
    'oscura',
    'era',
    89,
    [
      'mezzo',
       'E'
    ],
    'ritrovai',
    'per'
  ],
  'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
 'fine' => '!'
];


$nel      = "Nel";
$cammin   = "cammin";
$di       = "di";
$nostra   = "nostra";
$vita     = "vita";
$una      = "una";
$selva    = "selva";
$che      = "che'";
$la       = "la";
$via      = "via";
$smarrita = "smarrita";


$mezzo    = $words1[6][3][0];
$mi       = $words1[4];
$ritrovai = $words1[6][4];
$per      = $words1[6][5];
$oscura   = $words1[6][0];
$diritta  = $words1[7];
$era      = $words1[6][1];


$results = $nel . " " . 
           $mezzo . " " . 
           $di . " " . 
           $cammin . " " . 
           $di . " " . 
           $nostra . " " . 
           $vita . " " . 
           $mi . " " . 
           $ritrovai . " " . 
           $per . " " . 
           $una . " " . 
           $selva . " " . 
           $oscura . ", " . 
           $che . " " . 
           $la . " " . 
           $diritta . " " . 
           $via . " " . 
           $era . " " . 
           $smarrita;

echo $results . "\n";

?>