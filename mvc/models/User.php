<?php

class User extends Database
{
    public function LoginCheck($username, $password)
    {
        $query = "SELECT * FROM manager WHERE Username = :username AND Password = :password";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':username', $username, PDO::PARAM_STR);
            $statement->bindValue(':password', $password, PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            if ($count > 0) {
                $result = $statement->fetch();
                return $result;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function GetInfoUserByID($id) //check if user exist in database
    {
        $query = "SELECT Name, Email, PhoneNum, Username, Password, State FROM Account WHERE IdAccount = :id";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':id', $id, PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            $result = $statement->fetch();
            if ($count > 0) {
                return $result;
            } else return false;
        } catch (PDOException $e) {
        }
    }
}

?>
