<?php
namespace App\Controller;

class RegisterController{

    public function user($params){
        if(isset($params[PARAMTERS_INDEX])){
            $result = "User ".$params[PARAMTERS_INDEX]." was registered.";
        
            echo json_encode($result, JSON_UNESCAPED_UNICODE);
        }else{
            throw new \Exception('This need to have a name to register.');
        }
    }
}