<?php

/*
 * print_r() // Bir dizinin çıktısını okunulabilir şekilde gösteriyor.
 * var_dump() // printr ile aynıdır farkı ise dizinin türünün değerlerini ve uzunluğunu ayrıntılı olarak görüntüler. Hata ayıklama için ideal olan budur.
 * explode() // bir dizeyi belirli bir ayırıcıya göre bölen ve bölen parçaları bir diziye yerleştiren bir fonksiyondur. Genellikle metin işleme işlemlerinde kullanılır.
 * implode() // bir diziyi istediğimiz bir karakterle birleştirip string ifadeye çevirir.
 * count() // bir dizinin kaç elemanının olduğunu bulmaya yarar.
 * is_array() // kontrol fonksiyonudur. bir değişkene atanan yapının array(dizi) olup olmadığını kontrol eder.
 * shuffle() // dizi içerisinde yer alan verileri rastgele sıralar.
 * array_combine() // 2 farklı diziyi bir değişkende birleştirmeye yarar.
 * array_count_values() // bir dizide aynı olan değişkenlerin kaç kez tekrarlandığını sayar.
 * array_flip() // dizi de yer alan key ve value değişkenlerinin yerlerini değiştirir.
 * array_key_exist() // dizi de yer alan key lerin var olup olmadıklarını kontrol eder.
 */

    $arr = [
        'name' => 'Alparslan',
        'surname' => 'Akbaş',
        'age' => 24
    ];
     // print_r($arr);
     // var_dump($arr);
    $request = "Elma, Armut, Üzüm, Vişne";
//    $fruits = explode(",", $request);
//    $fullName = implode("/",$fruits);
//    print_r($fullName);
//    echo count($arr);
  /*  if (is_array($request)){
          echo "Bu bir dizidir";
      }
      else{
          echo "Bu bir dizi değildir";
      }
  request değişkeni strin olduğu için else bloğu çalışıyor.
  */

//  shuffle($arr);
//  print_r($arr);

//    $key = ['Ad', 'Soyad'];
//    $value = ['Alparslan' , 'Akbaş'];
//
//    $merge =  array_combine($key,$value);
//    print_r($merge);








?>
