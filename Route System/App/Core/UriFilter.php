<?php

namespace App\Core;

class UriFilter{
    
    public static function uriFilter($uri, $method, $get, $post){
        
      switch($method){
          case 'GET':
            
            UriDispacher::uriDispacher($uri, $get);
          break;
          case 'POST':
            
            UriDispacher::uriDispacher($uri, $post);
          break;
        }
    }
}