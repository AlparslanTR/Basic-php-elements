<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$arr = [
  'Name'=>'Alparslan',
  'FullName'=>'Akbas',
  'Info'=>[
      'Id'=>17876503030,
      'Gender'=>'Male',
      'BirthDate'=>'12.12.1998'
  ]
];
echo json_encode($arr);
