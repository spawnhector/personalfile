<?php
class person{
    // properties
    public $name;
    public $gender;
    public $community=array();
    public $group;
    public $year;
    // public function __construct($name, $group, $year, $gender, $community){
    //     $this->name= $name;
    //     $this->group= $group;
    //     $this->year= $year;
    //     $this->gender= $gender;
    //     $this->community=$community;
    // }
    // methods
    public function getname($getnames){
        $this->name=$getnames;
    }
    public function getgroup($getgroups){
        $this->group=$getgroups;
    }
    public function getyear($getyears){
        $this->year=$getyears;
    }
    public function getcommunity($community){
        $this->community=$community;
    }

    // statics
    public static $drinkage = 21;
    public static $learn="I'm Learning PHP";

    // static method
    public static function getda($newda){
        self::$drinkage;
    }
    public function getda1(){
        return self::$drinkage;
    }
}
$test = new person;
var_dump($test);
?>