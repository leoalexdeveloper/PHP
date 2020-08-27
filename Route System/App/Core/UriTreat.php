<?php
namespace App\Core;

class UriTreat{
    
    private static $uri=[];

    public static function uriTreat($uri){
        //convert into array
        $uri = explode('/', $uri);
        
        //filter usable uri part
        for($i = 0; $i < USABLE_URI; $i++){
            unset($uri[$i]);
        }

        //reindex array
        $uri = array_filter($uri);
        $uri = array_values($uri);

        //convert into string
        $uri = implode('/', $uri);

        //prevent empty $uri
        if($uri==''){
            $uri='signin';
        }

        //filter $uri to regex format, only letters and numbers
        if(preg_match('/[a-z0-9\/]*/', $uri)){

            //convert $uri into array
            $uri = explode('/', $uri);
            foreach($uri as $uriItem){
                    self::$uri[] = trim($uriItem);
                    array_shift($uri);
            }

            //return the $uri 
            return self::$uri;
        }else{

            //create exception 
            throw new Exception('Esta pgina não existe!');
        }
    }
}