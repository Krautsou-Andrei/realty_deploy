<?php
// // Подключаем MODX
// define('MODX_API_MODE', true);
// require '../index.php';
require 'Import.php';

// //подрубаем pdoТools для шаблонизации и поиска
// $pdo = $modx->getService('pdoFetch');
// $modx->getService('error', 'error.modError');
// $modx->setLogLevel(modX::LOG_LEVEL_INFO);
// $modx->switchContext('web');

// $items = [
//     'krasnodar' => [
//         'school' => 'https://krasnodar.jsprav.ru/api/map/category/3443/?bbox=47.8125,39.0106,50.6250,50.9248&zoom=5',
//         'kindergarten' =>  'https://krasnodar.jsprav.ru/api/map/category/1171/?bbox=47.8125,39.0106,50.6250,50.9248&zoom=5',
//         'market' =>  'https://krasnodar.jsprav.ru/api/map/category/1629/?bbox=47.8125,39.0106,50.6250,50.9248&zoom=5',
//         'hospital' =>  'https://krasnodar.jsprav.ru/api/map/category/1816/?bbox=47.8125,39.0106,50.6250,50.9248&zoom=5',
//     ],
//     'novoross' => [
//         'school' => 'https://novorossijsk.jsprav.ru/api/map/category/3443/?bbox=37.6172,44.6574,37.9248,44.7828&zoom=13',
//         'kindergarten' => 'https://novorossijsk.jsprav.ru/api/map/category/1171/?bbox=37.6172,44.6574,37.9248,44.7828&zoom=9',
//         'market' => 'https://novorossijsk.jsprav.ru/api/map/category/1629/?bbox=37.6172,44.6574,37.9248,44.7828&zoom=13',
//         'hospital' => 'https://novorossijsk.jsprav.ru/api/map/category/1816/?bbox=37.6172,44.6574,37.9248,44.7828&zoom=13',

//     ],
// ];

$items = [
    'krasnodar' => [
        'school' => 'https://krasnodar.jsprav.ru/api/map/category/3443/?bbox=40.0781,44.2798,41.4844,45.7755&zoom=9',
        'kindergarten' =>  'https://krasnodar.jsprav.ru/api/map/category/1171/?bbox=40.0781,44.2798,41.4844,45.7755&zoom=9',
        'market' =>  'https://krasnodar.jsprav.ru/api/map/category/1629/?bbox=40.0781,44.2798,41.4844,45.7755&zoom=9',
        'hospital' =>  'https://krasnodar.jsprav.ru/api/map/category/1816/?bbox=40.0781,44.2798,41.4844,45.7755&zoom=9',
    ],
    'msk' => [
        'school' => 'https://moskva1.jsprav.ru/api/map/category/3443/?bbox=36.5625,55.3589,38.6719,56.1519&zoom=10',
        'kindergarten' => 'https://moskva1.jsprav.ru/api/map/category/1171/?bbox=36.5625,55.3589,38.6719,56.1519&zoom=10',
        'market' => 'https://moskva1.jsprav.ru/api/map/category/1629/?bbox=36.5625,55.3589,38.6719,56.1519&zoom=10',
        'hospital' => 'https://moskva1.jsprav.ru/api/map/category/1816/?bbox=36.5625,55.3589,38.6719,56.1519&zoom=10',
    ],
    'spb' => [
        'school' => 'https://sankt-peterburg1.jsprav.ru/api/map/category/3443/?bbox=29.8828,59.7021,30.7617,60.1433&zoom=11',
        'kindergarten' => 'https://sankt-peterburg1.jsprav.ru/api/map/category/1171/?bbox=29.8828,59.7021,30.7617,60.1433&zoom=11',
        'market' => 'https://sankt-peterburg1.jsprav.ru/api/map/category/1629/?bbox=29.8828,59.7021,30.7617,60.1433&zoom=11',
        'hospital' => 'https://sankt-peterburg1.jsprav.ru/api/map/category/1816/?bbox=29.8828,59.7021,30.7617,60.1433&zoom=11',
    ],
    'nsk' => [
        'school' => 'https://novosibirsk.jsprav.ru/api/map/category/3443/?bbox=85.0781,53.9319,85.7812,55.9552&zoom=9',
        'kindergarten' => 'https://novosibirsk.jsprav.ru/api/map/category/1171/?bbox=85.0781,53.9319,85.7812,55.9552&zoom=9',
        'market' =>  'https://novosibirsk.jsprav.ru/api/map/category/1629/?bbox=85.0781,53.9319,85.7812,55.9552&zoom=9',
        'hospital' =>  'https://novosibirsk.jsprav.ru/api/map/category/1816/?bbox=85.0781,53.9319,85.7812,55.9552&zoom=9',
    ],
    'kzn' => [
        'school' => 'https://kazan.jsprav.ru/api/map/category/3443/?bbox=50.2734,55.3589,50.6250,56.3476&zoom=10',
        'kindergarten' => 'https://kazan.jsprav.ru/api/map/category/1171/?bbox=50.2734,55.3589,50.6250,56.3476&zoom=10',
        'market' =>  'https://kazan.jsprav.ru/api/map/category/1629/?bbox=50.2734,55.3589,50.6250,56.3476&zoom=10',
        'hospital' =>  'https://kazan.jsprav.ru/api/map/category/1816/?bbox=50.2734,55.3589,50.6250,56.3476&zoom=10',

    ],
    'rostov' => [
        'school' => 'https://rostov-na-donu.jsprav.ru/api/map/category/3443/?bbox=38.6719,46.2654,40.7812,46.5087&zoom=10',
        'kindergarten' => 'https://rostov-na-donu.jsprav.ru/api/map/category/1171/?bbox=38.6719,46.2654,40.7812,46.5087&zoom=10',
        'market' => 'https://rostov-na-donu.jsprav.ru/api/map/category/1629/?bbox=38.6719,46.2654,40.7812,46.5087&zoom=10',
        'hospital' => 'https://rostov-na-donu.jsprav.ru/api/map/category/1816/?bbox=38.6719,46.2654,40.7812,46.5087&zoom=10',

    ],
    'ekb' => [
        'school' => 'https://ekaterinburg.jsprav.ru/api/map/category/3443/?bbox=59.0625,56.3476,59.4141,57.3113&zoom=10',
        'kindergarten' => 'https://ekaterinburg.jsprav.ru/api/map/category/1171/?bbox=59.0625,56.3476,59.4141,57.3113&zoom=10',
        'market' => 'https://ekaterinburg.jsprav.ru/api/map/category/1629/?bbox=59.0625,56.3476,59.4141,57.3113&zoom=10',
        'hospital' => 'https://ekaterinburg.jsprav.ru/api/map/category/1816/?bbox=59.0625,56.3476,59.4141,57.3113&zoom=10',
    ]
];




function get_json($city, $name)
{
    $json_url = 'https://moskva1.jsprav.ru/api/map/category/3443/?bbox=36.5625,55.3589,38.6719,56.1519&zoom=10';
    $json_file_path = $city . '/' . $name . '.json';

    $ch = curl_init($json_url);
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_TCP_KEEPALIVE, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

    $response = curl_exec($ch);

    if ($response === false) {
        echo 'CURL Error: ' . curl_error($ch);
    } else {
        file_put_contents($json_file_path, $response);
    }

    curl_close($ch);
}
get_json('moskva', 'school');




// foreach ($items as $key => $city) {
//     foreach ($city as $k => $item) {
//         if ($data = Import::get($item, $k)) {
//             //var_dump($data);
//             Import::save($key, $k, $data);
//         }
//     }
// }
