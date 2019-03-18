<?
class api extends AppController{
    public function __construct($parent){
        $this->parent=$parent;
        //var_dump($this->parent);
        
    }
    public function index(){
        $data = array();
        $data["pagename"] = "api";

        $data["navigation"] = $this->parent->nav;
        $this->parent->getView("header", $data);
        $this->parent->getView("body_api");
        $this->parent->getView("footer");
    }

}
?>