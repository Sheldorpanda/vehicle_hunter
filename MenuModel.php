<?php
/*
*class MenuModel: contains the model for the memu and an accessor method model
*
*/

class MenuModel{
    private $menu;

    public function __construct(){
        $this->menu = array(
            "Search Cars For Sale" => array(
                "cars.com" => "http://cars.com",
                "carMax" => "carMax.com",
            ),
            "Check Your Car's Value" => array(
                "kbb"=> "http://www.kbb.com",
                "other"=> "#"
            ),
            "Autohome"=> "http://autohome.com"
        );
    }    
    public function getMenuItems(){
        return $this->menu;
    }
    
    
    
}
?>