<?php 

namespace Jeff\Project\Controller;

class HomePageController implements Controller{

    public function processRequest(): void
    {
        require_once __DIR__ . "/../View/Home.php";
    }

}

?>