

<?php
$connection = new DBConn();
$pdo = $connection->connect();
class DAO
{
    private static $daoObject;
    public static function getInstance()
    {
        if (!isset(self::$daoObject)) {
            self::$daoObject =  new DAO();
        }
        return self::$daoObject;
    }
    private function __construct()
    { }



    public function addMessage($message)
    {
        global $pdo;
        $sql = "INSERT INTO Message(Name, Email, Message, FindSourceID ) VALUES(:name, :email, :message, :findSourceID)";
        $statement = $pdo->prepare($sql);
        // $date = new DateTime("now", new DateTimeZone('Asia/Dhaka') );
        

        $statement->bindValue(':name', $message->NAME, PDO::PARAM_STR);
        $statement->bindValue(':email', $message->EMAIL, PDO::PARAM_STR);
        $statement->bindValue(':message', $message->MESSAGE, PDO::PARAM_STR);
        $statement->bindValue(':findSourceID', $message->FIND_SOURCE_ID, PDO::PARAM_STR);
        // $statement->bindValue(':recordCreated', $date->format('Y-m-d H:i:s'), PDO::PARAM_STR);
        $statement->execute();
        $id = $pdo->lastInsertId();

        return $id;
    }
}
