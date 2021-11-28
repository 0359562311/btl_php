<?php

class ThuongPhatModel extends Database 
{

    public function GetAllThuongPhat($q)
    {
        $query = "SELECT * FROM `thuongphat` INNER JOIN nhanvien on thuongphat.NhanVienID = nhanvien.nhanvienID";
        try {
            $statement = $this->connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        } catch (PDOException $e) {
        }
    }

    public function CreateThuongPhat($nhanvienID, $ghiChu, $tien, $managerID, $ngay)
    {
        $query = "INSERT INTO `thuongphat`(`NhanVienID`, `GhiChu`, `Tien`, `managerID`, `ngay`) VALUES (?,?,?,?,?)";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(1, $nhanvienID, PDO::PARAM_INT);
            $statement->bindValue(2, $ghiChu, PDO::PARAM_STR);
            $statement->bindValue(3, $tien, PDO::PARAM_STR);
            $statement->bindValue(4, $managerID, PDO::PARAM_INT);
            $statement->bindValue(5, $ngay, PDO::PARAM_STR);
            $statement->execute();
        } catch (PDOException $e) {
        }
    }

    public function UpdateThuongPhat($phatID, $nhanvienID, $ghiChu, $tien, $managerID, $ngay)
    {
        $query = "UPDATE `thuongphat` SET `NhanVienID`= ?,`GhiChu`= ?,`Tien`= ?,`managerID`= ?, `ngay`=? WHERE `phatID`= ?";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(1, $nhanvienID, PDO::PARAM_INT);
            $statement->bindValue(2, $ghiChu, PDO::PARAM_STR);
            $statement->bindValue(3, $tien, PDO::PARAM_STR);
            $statement->bindValue(4, $managerID, PDO::PARAM_INT);
            $statement->bindValue(5, $ngay, PDO::PARAM_STR);
            $statement->bindValue(6, $phatID, PDO::PARAM_INT);
            $statement->execute();
        } catch (PDOException $e) {
        }
    }

    public function DeleteThuongPhat($phatID)
    {
        $query = "DELETE FROM `thuongphat` WHERE phatID = ?";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(1, $phatID, PDO::PARAM_INT);
            $statement->execute();
        } catch (PDOException $e) {
        }
    }
}