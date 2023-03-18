<?php
require_once(__ROOT__ . '/UserManagement/library/configDB.php');

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

    private function startSession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    public function setSession($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public function destroySession()
    {
        session_destroy();
        header("Location:login.php");
    }
}
