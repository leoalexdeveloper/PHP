<?php
namespace App\Core;

class UriDispacher{

    public static function uriDispacher($uri, $items){
        
       
             //verify if the controller index exists
            if(isset($uri[CONTROLLER_INDEX])){
                
                //verify if the file with uri name exists
                if(file_exists(ROOT.ROOT_COMPLEMENT.'App/Controller/'.ucfirst($uri[CONTROLLER_INDEX])."Controller.php")){

                    foreach($items as $methodItems){
                
                        //match uri with uriArray
                        if($uri[CONTROLLER_INDEX]==$methodItems['controller']){
                                    
                            //store the class
                            $class = '\\App\\Controller\\'.ucfirst($uri[CONTROLLER_INDEX])."Controller";        
                            
                            //verify if this class exists
                            if(class_exists($class)){
                                
                                //verify if the method index element exist into Uri and if it is a method
                                if(isset($uri[ACTION_INDEX]) && method_exists($class, $uri[ACTION_INDEX])){

                                        //instanciate stored class
                                        $classInstance = new $class();
                                        //call the method
                                        $classInstance->{$uri[ACTION_INDEX]}($uri);

                                }else{

                                    //call the standard method case the uri method index there empty and callable
                                    if(is_callable($methodItems['method'])){

                                        $methodItems['method']($uri);

                                    }
                                } 
                            }else{
                                //error if this class doesn't exists
                                throw new \Exception('204');
                            } 
                        }
                    }
                }else{
                    //error if the file with uri name doesn't exists
                    throw new \Exception('304');
                }
            }else{
                //error if the controller index doesn't exists
                throw new \Exception('404');
            }
    }
}