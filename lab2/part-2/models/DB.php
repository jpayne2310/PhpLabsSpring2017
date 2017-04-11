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
    
    /**
     * 
     * @param type $dns
     * @param type $user
     * @param type $password
     */
    function __construct($dns, $user, $password) {
        $this->dns = $dns;
        $this->user = $user;
        $this->password = $password;
    }
    
    /**
     * 
     * @return type
     * @throws Exception
     */
    public function getDb() {
        
        //if there is already a db connection, use it
        if ( null != $this->db ) {
            return $this->db;
        }
        
        try{
            //create a database connection and save it to db
            $this->db = new PDO($this->dns, $this->user, $this->password);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $ex) {
            $this->closeDB();
            throw new Exception($ex->getMessage());
                }
                return $this->db;
    }
    
    //close database connection
    protected function closeDB() {
        $this->db = null;
    }
}
