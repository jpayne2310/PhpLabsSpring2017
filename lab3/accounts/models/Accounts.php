<?php
/**
 * Description of Accounts
 *
 * @author 001389421
 */
class Accounts extends DB {
    
    public function __construct() {
        
        $dbConfig = array(
        'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017',
        'DB_USER' => 'root',
        'DB_PASSWORD' => ''
        );       
        parent::__construct($dbConfig);       
    }
    
    public function signup ($email, $password){
        $validation = new Validation();
        $db = $this->getDB();
        $stmt = $db->prepare("INSERT INTO users SET email = :email, password = :password, created = now()");
        $binds = array(
        ":email" => $email,
        ":password" => password_hash($password, PASSWORD_DEFAULT)
        );      
        
            if ($stmt->execute($binds) && $stmt->rowCount()>0){
                return true;} 
                else {
                return false;}
    }
    
    public function checkDubEmail ($email){
        $validation = new Validation();
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT * from users where email = :email");
        $binds = array(
        ":email" => $email);      
        
            if ($stmt->execute($binds) && $stmt->rowCount()>0){
                return true;} 
                else {
                return false;}
    }

    public function login($email, $password) {
        $db = $this->getDB();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $binds = array(
        ":email" => $email      
        );      
        
            if ($stmt->execute($binds) && $stmt->rowCount()>0){
                $results =  $stmt->fetch(PDO::FETCH_ASSOC);
                if(password_verify($password, $results['password'])) {
                return $results['user_id'];
        }
        return 0;
    }
}
}