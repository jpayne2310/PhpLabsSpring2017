<?php



/**
 * Description of Message
 *
 * @author 001389421
 */
class Message implements IMssage{
    
    protected $messages = [];
    
    public function addMessage($key, $msg) {
        $this->messages[$key] = $msg;
    }

    public function getAllMessages() {
        return $this->mesages;
    }

    public function removeMessage($key) {
        if ( array_ket_exists($key, $this->messages)) {
        unset($this->messages[$key]);
        }
    }

    
}
