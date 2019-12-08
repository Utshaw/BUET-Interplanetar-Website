<?php
class Message {
    private $MESSAGE_ID;
    private $NAME;
    private $EMAIL;
    private $MESSAGE;
    private $FIND_SOURCE_ID;
    private $RECORD_CREATED;

    
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}