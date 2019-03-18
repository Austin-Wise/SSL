<?
class auth extends AppController{
    public function __construct(){

    }

    public function login(){
        if(@$_REQUEST["username"] && @$_REQUEST["password"]){

            if(@$_REQUEST["username"] == "bobby123" && @$_REQUEST["password"] == "Root"){
                $_SESSION["loggedin"] = 1;
                header("Location:/welcome");
            }else{
                header("Location:/welcome?msg=Bad Login");
            } 
        }else{
            header("Location:/welcome?msg=Bad Login");
        }
    }
    public function logout(){
        session_destroy();
        header("Location:/welcome");
    }
}

?>