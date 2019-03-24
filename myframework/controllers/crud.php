<?
class crud extends AppController{
    public function __construct($parent){
        $this->parent=$parent;
        //var_dump($this->parent);
        
    }
    public function index(){

        $data = array();
        $data["pagename"] = "Crud";
        $data["navigation"] = $this->parent->nav;
        $this->parent->getView("header", $data);
        $data["fruit"] = $this -> parent -> getModel("fruits")->read("select * from fruit_table;");
        $this->parent->getView("list", $data);
        $this->parent->getView("footer");

    }
    public function addAction(){
		$this->parent->getModel("fruits")->create(
			"insert into fruit_table (name) values(:name)",
            array(":name"=>$_REQUEST["name"])
        );
        header("location:/crud?msg=table item added");
        //-same as-
        // $data["fruit"] = $this -> parent -> getModel("fruitModel")->getAll();
        // $this->parent->getView("body_list", $data);
        // $this->parent->getView("footer");

    }

    public function deleteAction(){
        if (isset($_REQUEST['id'])) {
            $data = $this->parent->getModel('fruits')->delete('delete from fruit_table where id = :id',
                array(":id" => $_REQUEST['id']));
            header("location:/crud?msg=table item deleted");
          } else {
            header("location:/crud?msg=bad request");
          }

    }

    public function update() {
        if (isset($_REQUEST['id'])) {

        $data = $this->parent->getModel('fruits')->read('select * from fruit_table where id = :id', array(
          ":id" => $_REQUEST['id']
        ));

        $data = array();
        $data["pagename"] = "Crud";
        $data["navigation"] = $this->parent->nav;
        $this->parent->getView("header", $data);
        $this->getView("updateForm", $_REQUEST['id']);

      }else{
        header("location:/crud?msg=bad request");
    }}

    public function updateAction() {
        if(isset($_POST["name"])){
          $data = $this->parent->getModel('fruits')->update('update fruit_table set name = :name where id = :id', array(
            ":name" => $_POST['name'],
            ":id" => $_POST['id']
          ));
          header("location:/crud?msg=update success");
     
        } else {
            header("location:/crud?msg=update failed, name unknown");
        }
    }

}
?>