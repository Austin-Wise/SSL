<?
class welcome extends AppController{
    public function __construct($parent){
        $this->parent=$parent;
        //var_dump($this->parent);

    }

    public function about(){
        $data = array();
        $data["pagename"] = "about";
        $data["navigation"] = ["home"=>"/welcome/home", "about"=>"/welcome/about"];

        $this->parent->getView("header", $data);
        $this->parent->getView("navigation", $data);
        $this->parent->getView("body_about");
        $this->parent->getView("footer");
    }
    public function home(){
        $data = array();
        $data["pagename"] = "home";
        $data["navigation"] = ["home"=>"/welcome/home", "about"=>"/welcome/about"];

        $this->parent->getView("header", $data);
        $this->parent->getView("navigation", $data);
        $this->parent->getView("body_home");
        $this->parent->getView("footer");
    }

}
?>


<!-- if(strpos($_SERVER["REQUEST_URI"], $data["pagename"]) !== false ){
    str_replace("inactive", "active", "id='inactive'");
}else{
    str_replace("active", "inactive", "id='active'");
} -->

