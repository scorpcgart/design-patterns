<?php
namespace SocialNetwork\DbModel;

use SocialNetwork\Exceptions\DbConnectException;
use PDO;

class DbConnect
{
    private $pdo;

    public function __construct($dbname, $username, $pass)
    {
        $host = 'localhost';
        try
        {
            $this->pdo = new PDO("mysql:dbname=$dbname; host=$host", $username, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
        catch (DbConnectException $e)
        {
            echo "NOT connection to database!" . $e->getMessage();
            exit();
        }
    }

    public function getUsers(): array
    {
        try
        {
            $query = "SELECT * FROM Admins;";
            $sth = $this->pdo->query($query);
            $sth->execute();
        }
        catch (DbConnectException $e)
        {
            echo "Ошибка запроса " . $e->getMessage();
            exit();
        }

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function authorization($login, $pass)
    {
        try
        {
            $query = "SELECT password FROM Admins WHERE login = :login";
            $sth = $this->pdo->prepare($query);
            $sth->bindParam(':login', $login, PDO::PARAM_STR);
            $sth->execute();
            $result = $sth->fetch();
            if($result['password'] == $pass){
                echo "авторизация прошла успешно" . PHP_EOL;

                return true;
            }else{
                echo "неверный пароль или логин" . PHP_EOL;

                return false;
            }
        }
        catch (DbConnectException $e)
        {
            echo "Ошибка запроса " . $e->getMessage();
            exit();
        }

    }

}