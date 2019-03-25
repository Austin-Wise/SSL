<?

class api extends AppController{
    public function __construct($parent){
        $this->parent = $parent;
    }
    public function showApi($term = "Harry Potter and"){
        $data = array();
        $data["pagename"] = "Api";
        $data["navigation"] = $this->parent->nav;
        $this->parent->getView("header", $data);
        $data = $this->parent->getModel("apiModel")->googleBooks($term);

        $this->getView("body_api", $data);

        $this->parent->getView("footer");
    }
}

?>







