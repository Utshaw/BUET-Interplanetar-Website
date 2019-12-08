

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
        $sql = "INSERT INTO Message(Name, Email, Message, FindSourceID, RecordCreated ) VALUES(:name, :email, :message, :findSourceID, :recordCreated)";
        $statement = $pdo->prepare($sql);

        $statement->bindValue(':name', $message->NAME, PDO::PARAM_STR);
        $statement->bindValue(':email', $message->EMAIL, PDO::PARAM_STR);
        $statement->bindValue(':message', $message->MESSAGE, PDO::PARAM_STR);
        $statement->bindValue(':findSourceID', $message->FIND_SOURCE_ID, PDO::PARAM_STR);
        $statement->bindValue(':recordCreated', now(), PDO::PARAM_STR);
        $statement->execute();
        $id = $pdo->lastInsertId();

        return $id;
    }
}
