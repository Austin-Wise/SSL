<?
class welcome extends AppController{
    public function __construct($parent){
        $this->parent=$parent;
        //var_dump($this->parent);
        
    }

    public function index(){
        $data = array();
        $data["pagename"] = "home";

        $data["navigation"] = $this->parent->nav;
        $this->parent->getView("header", $data);
        $this->parent->getView("body_home");
        $this->parent->getView("footer");
    }

}
?>
