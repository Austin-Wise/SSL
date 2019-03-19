<?
class auth extends AppController{
    public function __construct(){

    }

    public function login(){
        if ($_REQUEST["username"] && $_REQUEST["password"]) {
			$path = "./assets/accounts.txt";
			if ( file_exists($path) ) {
				$users = file($path);
				foreach ($users as $data) {
					$user = explode("|", $data);
					if ($_REQUEST["username"] == $user[0] && $_REQUEST["password"] == $user[1]) {
						$_SESSION["loggedin"] = 1;
						$_SESSION["username"] = $_REQUEST["username"];
						$_SESSION["bio"] = $user[2];
						header("Location:/welcome");
					}
				}
				if ($_SESSION["loggedin"] != 1) {
					header("Location:/welcome?msg=Bad Login");
				}
			} else {
				header("Location:/welcome?msg=Server Error, Bad Login");
			}
		} else {
			header("Location:/welcome?msg=Missing username or password");
        }
    }
    public function logout(){
        session_destroy();
        header("Location:/welcome");
    }
}

// if(@$_REQUEST["username"] && @$_REQUEST["password"]){

//     if(@$_REQUEST["username"] == "bobby123" && @$_REQUEST["password"] == "Root"){
//         $_SESSION["loggedin"] = 1;
//         header("Location:/welcome");
//     }else{
//         header("Location:/welcome?msg=Bad Login");
//     } 
// }else{
//     header("Location:/welcome?msg=Bad Login");
// }
// }

?>