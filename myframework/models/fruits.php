<?
    class fruits{
        public function __construct($parent){
            $this->db = $parent->db;
        }

        public function create($sql, $value=array()) {
            $this->sql = $this->db->prepare($sql);
            $result = $this->sql->execute($value);
        }
        public function read($sql, $value=array()){
            $this->sql = $this->db->prepare($sql);
            $result = $this->sql->execute($value);
            $data = $this->sql->fetchAll();
            return $data;
        }
        public function update($sql, $value=array()){
            $this->sql = $this->db->prepare($sql);
            $result = $this->sql->execute($value);
        }
    
        public function delete($sql, $value=array()){
            $this->sql = $this->db->prepare($sql);
            $result = $this->sql->execute($value);
          }
}
?>