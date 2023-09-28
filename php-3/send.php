<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['surname'])) {
        $username = trim($_POST['username']);
        $surname = trim($_POST['surname']);

        // Verileri kontrol et
        if (!empty($username) && !empty($surname)) {
            echo "Kullanıcı Adı: " . $username;
            echo '<br>';
            echo "Kullanıcı Soy Adı: " . $surname;
        } else {
            echo "Kullanıcı Adı veya Soyadı boş.";
        }
    } else {
        echo "Kullanıcı Adı veya Soyadı boş.";
    }
} else {
    echo "Form gönderilmedi.";
}
