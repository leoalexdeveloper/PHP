<?php
namespace App\Core;
use App\Core\UriTreat,
    App\Core\FilterUri,
    App\Core\UriDispacher;
class RoutesCore{

    private $uri;
    private $method;
    private $arrayGet = [];
    private $arrayPost = [];
    private $error;

    private $uriArray;

    public function __construct(){
        //get the expected routes
        REQUIRE_ONCE ROOT_CONFIGS."/Routes.php";
        //get the uri
        $this->getUri();
        //get the methods
        $this->getMethod();
        
        try{
            //treat the uri, separate by index
            $this->uri = UriTreat::uriTreat($this->uri);
            //filter by teh method
            $this->uriArray = UriFilter::uriFilter($this->uri, $this->method, $this->arrayGet, $this->arrayPost);
        }catch(\Exception $e){
            echo json_encode($this->error = $e->getMessage());
        }
    }
    //function that get the getmethod expected indexes
    private function setArrayGet($controller, $method){
        $this->arrayGet[] = [
            'controller' => $controller,
            'method' => $method
        ];
    }
    //function that get the postmethod expected indexes
    private function setArrayPost($controller, $method){
        $this->arrayPost[]=[
            'controller' => $controller,
            'method' => $method
        ];
    }

    //get the request method
    private function getMethod(){
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    //get the uri
    private function getUri(){
        $this->uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    }

}