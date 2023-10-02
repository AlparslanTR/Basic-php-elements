<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Curl Başlat
$curl = curl_init();
$url = 'https://www.alparslanakbas.org.tr/';
$url2 = 'https://jsonplaceholder.typicode.com';

// Curl Ayarları
$curlSettings = curl_setopt($curl, CURLOPT_URL, $url2);

// Curl İsteği Çalıştırıldı
if ($curlSettings === false) {
    die('Curl ayarları yapılamadı.');
}

$response = curl_exec($curl);

if ($response === false) {
    die('Curl isteği başarısız: ' . curl_error($curl));
}

// İşlemler burada $response değişkeni ile devam edebilir.
// Örneğin, web sitesinin içeriğini görüntülemek için:
echo $response;

// Curl Durduruldu
curl_close($curl);
