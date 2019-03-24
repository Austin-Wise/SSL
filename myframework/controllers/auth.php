<?
class auth extends AppController{
    public function __construct($parent){
		$this->parent = $parent;
    }

    public function login(){
		if ($_REQUEST["username"] && $_REQUEST["password"]) {
			$data = $this->parent->getModel("users")->
			select( "select * from users where email = :email and password = :password", 
			array( ":email"=>$_REQUEST["username"], ":password"=>sha1($_REQUEST["password"])));

			
			if($data) {
				$_SESSION["loggedin"] = 1;
				header("Location:/welcome");
			}
			else{
				header("location:/welcome?msg=bad login");
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

// $path = "./assets/accounts.txt";
// 			if ( file_exists($path) ) {
// 				$users = file($path);
// 				foreach ($users as $data) {
// 					$user = explode("|", $data);
// 					if ($_REQUEST["username"] == $user[0] && $_REQUEST["password"] == $user[1]) {
// 						$_SESSION["loggedin"] = 1;
// 						$_SESSION["username"] = $_REQUEST["username"];
// 						$_SESSION["bio"] = $user[2];
// 						header("Location:/welcome");
// 					}
// 				}
// 				if ($_SESSION["loggedin"] != 1) {
// 					header("Location:/welcome?msg=Bad Login");
// 				}
// 			} else {
// 				header("Location:/welcome?msg=Server Error, Bad Login");
// 			}

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