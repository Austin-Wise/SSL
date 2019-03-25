<?
require_once './google-api-php-client-2.2.2/vendor/autoload.php';

class apiModel{
    public function __construct($parent){
        $this->db = $parent->db;
    }

    public function googleBooks($term=""){
        $client = new Google_Client();
        $client->setApplicationName("SSL0319");
        $client->setDeveloperKey("AIzaSyBZxcipcbTxEI5zDeHuGedhj8ofq0ohX_M");

        $service = new Google_Service_Books($client);

        $optParams = array("maxResults"=>"4", "filter"=>"free-ebooks");
        $result = $service->volumes->listVolumes($term,$optParams);

        return $result;
    }

}

?>