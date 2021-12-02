<?php

// $string = '1000';
// $number = 100;
// $arr = array(); //masivi
// $arr = array(
//     $number,
//     $string,
//     234423,
//     array(
//         'asdasd',
//         '1 asdasd',
//         '2 asdasd',
//         '3 asdasd',
//         '4 asdasd',
//     )
// );
// $arr = [
//     $number,
//     $string,
//     234423,
//     [
//         'asdasd',
//         '1 asdasd',
//         '2 asdasd',
//         '3 asdasd',
//         '4 asdasd',
//         [
//             'measme done',
//             [
//                 'amomige me',
//                 ' asd 23',
//             ]
//         ]
//     ]
// ];

// foreach ($arr as $key => $value1) {

//     if (is_array($value1)) {
//         foreach ($value1 as $value2) {

//             if (is_array($value2)) {
//                 foreach ($value2 as $value3) {

//                     if (is_array($value3)) {
//                         foreach ($value3 as $value4) {

//                             echo ($value4);
//                             echo "<br>";
//                             // die();

//                         }
//                     }

//                 }
//             }

//         }
//     }

// }


// var_dump($arr[3][5][1][0]);


// 1.  sheqmeni carieli masivvi   $arr
// 2.  masivshi chatsere 5 elementi zogis iyos STRING tipis zogi INT tipis

// 3. arsebul masivshi boloshi daamate axali elementi romelic iqneba MASIVI/ARRAY

// 4. 3 davalebashi sheqmnil masivshi chatsere kide elementebi

// 5. var dampit dabecvhde mtliani array

// ============================================================= next lessson =============================================================


// $arr = [1213 , 'asdasd',  [1,2,3, ['aqvar']]];
// var_dump($arr);
// array_push($arr[2][3],"blue","yellow");
// var_dump($arr);


// $arr = [
//     'peter' => [
//         'salary' => '500',
//         'car' => 'bmw',
//         'houese' => 'kargi',
//         'skills' => [
//             'php',
//             'html',
//             'css',
//         ],
//     ],
//     'john' => [
//         'salary' => '800',
//         'car' => 'bmw',
//         'houese' => 'kargi',
//         'skills' => [
//             'js',
//             'html',
//             'css',
//         ],
//     ],
// ];

// foreach ($arr as $key => $value) {
//     if ($key == 'peter') {
//         echo $key . ' asdasds';
//         echo "<br>";
//         echo "<br>";
//         echo "<br>";
//     }
//         echo $key;
//         echo "<br>";
// }

$arr = [
'Asia' => [
    'China',
    'India',
    'Indonesia',
    'Pakistan',
],
'Africa' => [
    'China 1',
    'India 2',
    'Indonesia 3',
    'Pakistan4',
]
// 'Europe' =>
// 'North America' =>
// 'South America' =>
// 'Australia' =>
// 'Antarctica' =>
];
// var_dump($arr);

// foreach ($arr as $continet => $value) {
//     if ($continet == 'Africa') {
//         # code...
//         echo $continet;
//         echo "<br>";
//         echo "<br>";
//         echo "<br>";
//         foreach ($value as $asdasd) {
//            echo $asdasd;
//             echo "<br>";
//         }
//     }
// }
// var_dump($arr['Africa'][2]);
#   Country Population


// davaleba
// gaakete 3 doniani Associative  array
// $arr = [
//     'mer' => [
//         'model 1' => [
//             'hp'
//         ],
//         'model 2' => [
//             'hp'
//         ]
//     ]
// ]

// $cars = [
//     'bmw' => [
//         'x4' => [
//             'hp',
//             'doors',
//             'doors',
//             'doors',
//             'doors',
//         ],
//     ],
// ];
// foreach ($cars as $comany => $models) {
//     echo $comany;
//     echo "<br>";
//     foreach ($models as $model => $specs) {
//         echo $model;
//         echo "<br>";
//         foreach ($specs as $erti) {
//             echo $erti;
//             echo "<br>";
//         }

//     }

// }
// $ragaca = $cars['bmw']['x4'];
// foreach ($ragaca as $erti) {
//     echo $erti;
//     echo "<br>";
// }
// var_dump($cars['bmw']);

//foreach each dabechde yvelaperi
// merc
// bmw-
// fiat
