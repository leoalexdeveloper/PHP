<?php
//at this file you can put your route reference
//this file will be required at RoutesCore to execute $this->setArray... function
//the get function push the expected get index and the post at the same but with the post index
//all information ar stored in diferent arrays reffers to the method

$this->setArrayGet('signin', function($uri){
    REQUIRE_ONCE "../Public/Template/".ucfirst($uri[CONTROLLER_INDEX])."Template.php";
});
$this->setArrayGet('register', function($uri){
    REQUIRE_ONCE "../Public/Template/SigninTemplate.php";
});

$this->setArrayGet('register', function($uri){
    
});

$this->setArrayPost('register', function($uri){
    
});
