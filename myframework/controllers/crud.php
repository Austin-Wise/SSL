<?
class crud extends AppController{
    public function __construct($parent){
        $this->parent=$parent;
        //var_dump($this->parent);
        
    }
    public function index(){
        $data = array();
        $data["pagename"] = "crud";

        $data["navigation"] = $this->parent->nav;
        $this->parent->getView("navigation", $data);
        $this->parent->getView("header", $data);
        $this->parent->getView("body_about");
        $this->parent->getView("footer");
    }

}
?>