<?php
    require_once("MenuModel.php");
    
    class MenuView {
        public function __construct(){
            $this->model = new MenuModel();
        }
        
        /*
         *Returen HTML that is 
         */
        public function genMenu(){     
            $links = "";       
            // creates a string of the top level menus
            foreach($this->model->getMenuItems() as $link => $item){
                if(is_array($item)){
                    $links = $links . "<li class = \"dropdown\">" .
                        "<a href=\"#\" class=\"dropdown-toggle\"" .
                        "data-toggle=\"dropdown\" role = \"button\">$link</a>" .
                        "<ul class=\"dropdown-menu\">";
                    foreach($item as $sublink => $subitem){
                         $links = $links . "<li><a href=\"$subitem\">$sublink</a></li>";
                    }
                    $links = $links . "</ul></li>";
                }else{
                   $links = $links . "<li><a href=\"$item\">$link</a></li>"; 
                }
            }
            return $links;
        }
        
        public function genTabs(){
            
        }
        
    }





?>