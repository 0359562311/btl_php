<?php

class CaLamModel extends Database 
{

    public function GetAllCaLam($q)
    {
        $query = "SELECT * FROM `calam` INNER JOIN `nhanvien` on calam.NhanVienID = nhanvien.nhanvienID order by Ngay DESC;";
        try {
            $statement = $this->connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        } catch (PDOException $e) {
        }
    }

    public function CreateCaLam($nhanvienID, $soGio, $ngay)
    {
        $query = "INSERT INTO `calam`(`SoGio`, `Ngay`, `NhanVienID`) VALUES (?,?,?)";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(1, $soGio, PDO::PARAM_STR);
            $statement->bindValue(2, $ngay, PDO::PARAM_STR);
            $statement->bindValue(3, $nhanvienID, PDO::PARAM_INT);
            $statement->execute();
        } catch (PDOException $e) {
        }
    }

    public function UpdateCaLam($CaLamID, $soGio, $ngay)
    {
        $query = "UPDATE `calam` SET `SoGio`= ?,`Ngay`= ? WHERE `CaLamID`= ?";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(1, $soGio, PDO::PARAM_STR);
            $statement->bindValue(2, $ngay, PDO::PARAM_STR);
            $statement->bindValue(3, $CaLamID, PDO::PARAM_INT);
            $statement->execute();
        } catch (PDOException $e) {
        }
    }

    public function DeleteCalam($CaLamID)
    {
        $query = "DELETE FROM `calam` WHERE CaLamID = ?";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(1, $CaLamID, PDO::PARAM_INT);
            $statement->execute();
        } catch (PDOException $e) {
        }
    }
}