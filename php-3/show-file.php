<?php

if($_FILES['file']['error']==4){
    echo 'Lütfen Dosya Seçiniz';
}
else{
    print_r($_FILES);
    if (is_uploaded_file($_FILES['file']['tmp_name'])){

    }
    else{
        echo 'Dosya Yükleme Başarısız.';
    }
}
