# BUET-Interplanetar-Website
## Installation
- dbconnection.php file must be included under model folder <br />
File format:
```
<?php
class DBConn {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;
    public function connect() {
        $this->servername = "<servername>";
        $this->username = "<username>";
        $this->password = "<password>";
        $this->dbname = "<db_name>";
        $this->charset = "utf8mb4";
        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $th) {
            $error_msg = "Connection failed: " . $th->getMessage();
        }
    }

}
```
