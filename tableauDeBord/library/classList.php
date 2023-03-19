<?php
require_once(__ROOT__ . '/library/configDB.php');

class ConnectDB extends DatabaseInfo
{
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insertData($arrayData)
    {
        try {
            $data = $this->db->prepare("INSERT INTO users (nom, prenom, email, motdepasse, adress, codePostal, ville, photo, sexe)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $data->execute($arrayData);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function selectData($queryData)
    {
        try {
            $x = $this->db->query($queryData)->fetchAll(PDO::FETCH_OBJ);
            return $x;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

class MyClass
{
    public static function dataClean($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}


class Session
{
    public function __construct()
    {
        $this->startSession();
    }

    private static function startSession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    public function setSession($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function sessionCheck()
    {
        self::startSession();
        if (self::get("login") == false) {
            self::destroySession();
            header("Location: /UserManagement/UserManagement/index.php");
            // This location should be changed according to localhost root;
        }
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    public static function destroySession()
    {
        session_destroy();
        header("Location:index.php");
    }
}
