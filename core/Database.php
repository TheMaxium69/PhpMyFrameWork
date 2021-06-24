<?php
class Database 
{


    protected $isPDO;


    public function __contruct(){
        $this->isPDO = getPdo();
    }


    public static function getPdo(){


        $pdo = new PDO('mysql:host=localhost;dbname=garages','garage' ,'garage', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_PERSISTENT
            ]);

          return $pdo;


    }
}




