<?php 

class Session{

    //INICIALIZA LA SESION
    public function __construct()
    {
        session_set_cookie_params(60*60*24*14);
        session_start();
    }

    //ALMACENA DATOS EN LA SESION 
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    //MUESTRA LOS DATOS EN LA SESION
    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    //CERRAR SESION 
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>