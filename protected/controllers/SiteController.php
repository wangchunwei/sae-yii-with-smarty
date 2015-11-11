<?php
class SiteController extends CController 
{
    
    public function actionIndex() {
        
         $data = array("name" => "willwcw@163.com");
         $this->render("index", $data);
        
    }
        
    public function actionTest() {
     	echo "test";   
        
        
    }
        
        
                                      
                                      
}
