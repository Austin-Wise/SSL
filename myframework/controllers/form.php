<?
class form extends AppController{
    public function __construct($parent){
        $this->parent=$parent;
        //var_dump($this->parent);
        
    }
    public function index(){
        $data = array();
        $data["pagename"] = "form";

        $data["navigation"] = $this->parent->nav;
        $this->parent->getView("navigation", $data);
        $this->parent->getView("header", $data);
        $this->parent->getView("body_form");
        $this->parent->getView("footer");
    }

    public function received(){
        $data = array();
        $data["pagename"] = "form";

        $data["navigation"] = $this->parent->nav;
        $this->parent->getView("navigation", $data);
        $this->parent->getView("header", $data);

        $error = false;
        
        if(!preg_match("/(?=.{5,})/",$_POST["username"])){
            $error = true;
            echo "<li>Username must contain 5+ characters.</li>";
        }
        if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])/",$_POST["password"])){
            $error = true;
            echo "<li>Password must contain one capital and one lowercase letter.</li>";
        }
        if(!preg_match("/^[a-zA-Z0-9 !?.-]+$/", $_POST["bio"])){
            $error = true;
            echo "<li>You have invalid characters within BIO. (A-Z, ? . !)</li>";
        }
        if(!preg_match("/.*\S.*/",$_POST["age"])){
            $error = true;
            echo "<li>Age is required.</li>";
        }
        if(!isset($_POST["gender"])){
            $error = true;
            echo "<li>Please select a gender.</li>";
        }
        if(!isset($_POST["terms"])){
            $error = true;
            echo "<li>Please read and accept the Terms of Service.</li>";
        }
        $this->parent->getView("body_form");
        $this->parent->getView("footer");

        if($error == false ){
            echo "<script type='text/javascript'>alert('Welcome!')</script>";
            echo "<script type='text/javascript'>window.document.location.href='/welcome'</script>";
        }

    }

    public function ajaxparse(){
        if($_POST["username"] != "" && $_POST["password"] != ""){
            if($_POST["username"]=="bobby123" && $_POST["password"]=="Root"){
                echo "good";
            }else{
                echo "Invalid Username / Password";
            }
        }else{
            echo "Invalid Username / Password";
        }
    }
}
?>