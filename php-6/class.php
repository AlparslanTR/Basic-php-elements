<?php
class User{
    public int $Id =1;
    public string $FirstName = 'Alparslan';
    public string $FullName = 'Akbaş';
    public function ShowInfo(){
       echo 'Id:' .$this->Id .'<hr>';
       echo 'Ad:' .$this->FirstName.'<hr>';
       echo 'Soyad:' .$this->FullName.'<hr>';
    }
}
$getUser = new User();
$getUser->ShowInfo();
