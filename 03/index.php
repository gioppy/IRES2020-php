<?php

$array1 = [
  1,
  2,
  3,
  4,
  5,
  6.7,
  7,
  'pippo',
  null,
  true,
  false,
  [
    1,
    2,
    3,
    '5',
  ],
];

//print_r($array1);
var_dump($array1);

print $array1[11][0];

//$array1[] = 'pippo';
array_push($array1, [1, 3, 4], 3, 'x');
$x = array_pop($array1);

var_dump($x);

for ($i = 0; $i < count($array1); $i++) {
  if (is_array($array1[$i])) {
    var_dump($array1[$i]);
  } else {
    print $array1[$i] . '<br />';
  }
}

$array2 = [
  'name' => 'pippo',
  'last_name' => 'pluto',
  'age' => 35,
  'comments' => [
    [
      'id' => 1,
      'text' => 'asadsad'
    ],
    [
      'id' => 2,
      'text' => 'asadsad'
    ]
  ]
];

var_dump($array2);

print $array2['name'];
print $array2['comments'][0]['text'];

foreach ($array2 as $k => $i) {
  print "$k: $i<br />";
}
