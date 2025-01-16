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
        'school' => 'https://krasnodar.jsprav.ru/api/map/category/3443/?bbox=47.8125,39.0106,50.6250,50.9248&zoom=7',
        'kindergarten' =>  'https://krasnodar.jsprav.ru/api/map/category/1171/?bbox=47.8125,39.0106,50.6250,50.9248&zoom=7',
        'market' =>  'https://krasnodar.jsprav.ru/api/map/category/1629/?bbox=47.8125,39.0106,50.6250,50.9248&zoom=7',
        'hospital' =>  'https://krasnodar.jsprav.ru/api/map/category/1816/?bbox=47.8125,39.0106,50.6250,50.9248&zoom=7',
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
        'school' => 'https://novosibirsk.jsprav.ru/api/map/category/3443/?bbox=45.0000,22.0767,112.5000,32.1252&zoom=5',
        'kindergarten' => 'https://novosibirsk.jsprav.ru/api/map/category/1171/?bbox=45.0000,22.0767,112.5000,32.1252&zoom=5',
        'market' =>  'https://novosibirsk.jsprav.ru/api/map/category/1629/?bbox=45.0000,22.0767,112.5000,32.1252&zoom=5',
        'hospital' =>  'https://novosibirsk.jsprav.ru/api/map/category/1816/?bbox=45.0000,22.0767,112.5000,32.1252&zoom=5',
    ],
    'kzn' => [
        'school' => 'https://kazan.jsprav.ru/api/map/category/3443/?bbox=42.1875,49.1129,56.2500,50.9248&zoom=7',
        'kindergarten' => 'https://kazan.jsprav.ru/api/map/category/1171/?bbox=42.1875,49.1129,56.2500,50.9248&zoom=7',
        'market' =>  'https://kazan.jsprav.ru/api/map/category/1629/?bbox=42.1875,49.1129,56.2500,50.9248&zoom=7',
        'hospital' =>  'https://kazan.jsprav.ru/api/map/category/1816/?bbox=42.1875,49.1129,56.2500,50.9248&zoom=7',

    ],
    'rostov' => [
        'school' => 'https://rostov-na-donu.jsprav.ru/api/map/category/3443/?bbox=56.2500,32.1252,67.5000,55.9552&zoom=5',
        'kindergarten' => 'https://rostov-na-donu.jsprav.ru/api/map/category/1171/?bbox=56.2500,32.1252,67.5000,55.9552&zoom=5',
        'market' => 'https://rostov-na-donu.jsprav.ru/api/map/category/1629/?bbox=56.2500,32.1252,67.5000,55.9552&zoom=5',
        'hospital' => 'https://rostov-na-donu.jsprav.ru/api/map/category/1816/?bbox=56.2500,32.1252,67.5000,55.9552&zoom=5',

    ],
    'ekb' => [
        'school' => 'https://ekaterinburg.jsprav.ru/api/map/category/3443/?bbox=50.6250,52.6684,53.4375,60.4052&zoom=7',
        'kindergarten' => 'https://ekaterinburg.jsprav.ru/api/map/category/1171/?bbox=50.6250,52.6684,53.4375,60.4052&zoom=7',
        'market' => 'https://ekaterinburg.jsprav.ru/api/map/category/1629/?bbox=50.6250,52.6684,53.4375,60.4052&zoom=7',
        'hospital' => 'https://ekaterinburg.jsprav.ru/api/map/category/1816/?bbox=50.6250,52.6684,53.4375,60.4052&zoom=7',
    ]
];




// function get_json($city, $name)
// {
//     $json_url = 'https://moskva1.jsprav.ru/api/map/category/3443/?bbox=36.5625,55.3589,38.6719,56.1519&zoom=10';
//     $json_file_path = $city . '/' . $name . '.json';

//     $ch = curl_init($json_url);
//     curl_setopt($ch, CURLOPT_ENCODING, '');
//     curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//     curl_setopt($ch, CURLOPT_TIMEOUT, 30);
//     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
//     curl_setopt($ch, CURLOPT_TCP_KEEPALIVE, 1);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

//     $response = curl_exec($ch);

//     if ($response === false) {
//         echo 'CURL Error: ' . curl_error($ch);
//     } else {
//         file_put_contents($json_file_path, $response);
//     }

//     curl_close($ch);
// }
// get_json('moskva', 'school');




foreach ($items as $key => $city) {
    foreach ($city as $k => $item) {
        if ($data = Import::get($item, $k)) {
            //var_dump($data);
            Import::save($key, $k, $data);
        }
    }
}
