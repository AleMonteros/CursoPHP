<?php 

    include_once 'include/user.php';
    include_once 'include/user-session.php';

    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
        // echo "Hay Sesíon";
        $user->setUser($userSession->getCurrentUser());
        include_once'views/view-home.php';

    }else if(isset($_POST['username']) && isset($_POST['password'])){
        // echo "Validación de Login";

        $userForm = $_POST['username'];
        $passForm = $_POST['password'];

        if($user->userExists($userForm, $passForm)){
            // echo "Usuario Validado";
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);

            include_once 'views/view-home.php';

        }else{
            // echo "Nombre de Usuario y/o Password Incorrectos";
            $errorLogin = "Nombre de Usuario y/o Password Incorrectos";
            include_once 'views/view-login.php';
        }

    }else{
        //echo "Login";
        include_once 'views/view-login.php';
    }

?>