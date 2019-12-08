
<?php
require_once './model/dbconnection.php';
require_once './model/message.php';
require_once './model/dataAccess.php';

$daoObject = DAO::getInstance();

if(isset($_POST['message'])) {
    echo $_POST['name'].  $_POST['email']. $_POST['message'] . $_POST['find-us'];

    $message = new Message();
    $message->NAME = $_POST['name'];
    $message->EMAIL = $_POST['email'];
    $message->MESSAGE = $_POST['message'];
    $message->FIND_SOURCE_ID = $_POST['find-us'];

    $daoObject->addMessage($message);
}