<?php

use Jeff\Project\Controller\Error404Controller;
use Jeff\Project\Controller\HomePageController;
use Jeff\Project\Controller\LoginPageController;

return [
    
    "GET|/"         =>   HomePageController::class,
    "GET|/login"    =>   LoginPageController::class,
    /**
     * Actions Routes
     */
    
]

?>