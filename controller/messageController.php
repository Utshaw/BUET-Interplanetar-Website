
<?php
require_once './model/dbconnection.php';
require_once './model/message.php';
require_once './model/dataAccess.php';

$daoObject = DAO::getInstance();

if(isset($_POST['message'])) {
    echo $_POST['name'].  $_POST['email']. $_POST['message'] . $_POST['find-us'];
}