<?
require_once './google-api-php-client-2.2.2/vendor/autoload.php';
class api extends AppController{
    public function __construct($parent){

        $this->parent=$parent;
        //var_dump($this->parent);
        
    }
    public function callback(){
        var_dump($_REQUEST);

    }

    public function index(){
        
        $client = new Google_Client();
        $client->setAuthConfig('./google-api-php-client-2.2.2/vendor/secret.json');
        $client->addScope(Google_Service_Drive::DRIVE);
        $redirect_uri = "https://localhost/api/callback";
        var_dump($client);
        $client->setRedirectUri($redirect_uri);
        // var_dump($client);
        $service = new Google_Service_Drive($client);


        


        
if (isset($_REQUEST['logout'])) {
  unset($_SESSION['upload_token']);
}



        // $data = array();
        // $data["pagename"] = "api";

        // $data["navigation"] = $this->parent->nav;
        // $this->parent->getView("header", $data);

        // $this->parent->getView("footer");
    }

}
?>