<?php

if($_FILES['file']['error']==4){
    echo 'Lütfen Dosya Seçiniz';
}
else{
    print_r($_FILES);
    if (is_uploaded_file($_FILES['file']['tmp_name'])){
        $fileTypeMust=[
            'image/png',
            'image/jpeg'
        ];
        $fileTypeRequest= $_FILES['file']['type'];
        $fileSize = (1024 *1014 *5);
        if (in_array($fileTypeRequest,$fileTypeMust)){
            if ($fileSize>=$_FILES['file']['size']){
                $upload = move_uploaded_file($_FILES['file']['tmp_name'],'images/' . $_FILES['file']['name']);
                echo '<img src="images/' . $_FILES['file']['name'] . '">';

            }
            else{
                echo 'Dosya en fazla 5mb olabilir';
            }
        }
        else{
            echo 'Dosya formatı png veya jpeg olmalıdır';
        }
    }
    else{
        echo 'Dosya Yükleme Başarısız.';
    }
}
