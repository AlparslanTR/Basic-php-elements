<?php
// İnterface ile abstract farkları

/* Interface
  * Soyut metotlar ve sabitler içerir.
  * Sadece public metot tanımlanabilir.
  * Aynı sınıfta birden fazla interface kullanılabilir.
 */

/*Abstract
  *Soyut metotlar, sabitler, normal metot ve özellikleri içerir.
  *Public, protected, private tanımlanabilir.
  *Aynı sınıf sadece bir abstract sınıftan türiyebilir.
*/

abstract class Product{
    abstract public function Add();
    abstract public function GetAll();
    abstract public function Update();
    abstract public function Delete();
}

interface IUser{
    public function Add();
    public function GetAll();
    public function Update();
    public function Delete();
}

class Database extends Product{

    public function Add()
    {
        // TODO: Implement Add() method.
    }

    public function GetAll()
    {
        // TODO: Implement GetAll() method.
    }

    public function Update()
    {
        // TODO: Implement Update() method.
    }

    public function Delete()
    {
        // TODO: Implement Delete() method.
    }
}

////////////////////////////////////////////////////////
class Databases implements IUser
{
    public function Add()
    {
        // TODO: Implement Add() method.
    }
    public function GetAll()
    {
        // TODO: Implement GetAll() method.
    }
    public function Delete()
    {
        // TODO: Implement Delete() method.
    }
    public function Update()
    {
        // TODO: Implement Update() method.
    }
}
