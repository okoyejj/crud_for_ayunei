<?php
/**
 * Created by PhpStorm.
 * User: Okoye
 * Date: 05/12/2018
 * Time: 13:28
 */
    include_once('./config/class.database.php');

    class ManageUsers{
        public $link;

        function __construct(){
            $db_connection = new database();
            $this->link = $db_connection->connect();
            return $this->link;
        }

        function createRole($role_name){
            $query = $this->link->prepare("insert into role (role_name) values (?)");
            $values = array($role_name);
            $query->execute($values);
            $counts = $query->rowCount();
            return $counts;
        }
    }

    $users = new ManageUsers();
    print_r($users->createRole('Accountant'));
?>