<?php
/**
 * Description of DB
 *
 * @author James
 */
class DB {
    protected $db = null;
    protected $dns;
    protected $user;
    protected $password;
    
    function __construct($dns, $user, $password) {
        $this->dns = $dns;
        $this->user = $user;
        $this->password = $password;
    }
    
    public function getDb() {
        
        if ( null != $this->db ) {
            return $this->db;
        }
        
        try{
            $this->db = new PDO($this->dns, $this->user, $this->password);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $ex) {
            $this->closeDB();
            throw new Exception($ex->getMessage());
                }
                return $this->db;
    }
    
    protected function closeDB() {
        $this->db = null;
    }
}
