<?php 

namespace Jeff\Project\Controller;


class LoginPageController implements Controller{

    public function processRequest(): void
    {
        $_SESSION['logado'] = true;

        require_once __DIR__ . "/../View/Login.php";
    }

}

?>