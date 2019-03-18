<?
class profile extends AppController{
    public function __construct($parent){
        $this->parent=$parent;
        if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){
            
        }else{
            header("Location:/welcome?msg=Not Allowed");
        }
    }

    public function index(){
        $data = array();
        $data["pagename"] = "profile";

        $data["navigation"] = $this->parent->nav;
        $this->parent->getView("header", $data);
        $this->parent->getView("body_profile");
        $this->getView("footer");
    }
}
?>