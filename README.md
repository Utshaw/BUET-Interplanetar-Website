# [BUET-Interplanetar-Website](https://buetinterplanetar.com/) [![Website shields.io](https://img.shields.io/website-up-down-green-red/http/shields.io.svg)](http://shields.io/) 

<img src="resources/img/logo.png" align="right" width="100px" alt="Team Interplanetar logo">

## Hosting
- Add `dbconnection.php` file inside `model` folder <br />
File format(`dbconnection.php`):
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
- Upload the full folder inside `public_html`

[![ForTheBadge built-with-love](http://ForTheBadge.com/images/badges/built-with-love.svg)](https://GitHub.com/Naereen/) by <a href="https://github.com/Utshaw" target="_blank">Utshaw</a>
