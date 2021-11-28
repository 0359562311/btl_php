<?php

class EmployeeModel extends Database
{
    public function GetAllEmployee($q)
    {
        $query = "SELECT * FROM `nhanvien` as n INNER JOIN chucvu as c on c.ChucVuID = n.chucVuID where n.hoVaTen like :q; ORDER BY nhanvienID asc";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':q', "%" . $q . "%", PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            // if ($count > 0) {
            //     $result = $statement->fetchAll();
            //     return $result;
            // } else return false;
            $result = $statement->fetchAll();
            return $result;
        } catch (PDOException $e) {
        }
    }

    public function UpdateInfoEmployee($nhanvienID, $hoVaTen, $diaChi, $soDienThoai, $email, $chucVuID)
    {
        $query = "UPDATE `nhanvien` SET `hoVaTen`= ?, `chucVuID`= ?, `DiaChi`= ?, `SoDienThoai`= ?, `email`= ? WHERE `nhanvienID`= ?";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(6, $nhanvienID, PDO::PARAM_INT);
            $statement->bindValue(1, $hoVaTen, PDO::PARAM_STR);
            $statement->bindValue(2, $chucVuID, PDO::PARAM_INT);
            $statement->bindValue(3, $diaChi, PDO::PARAM_STR);
            $statement->bindValue(4, $soDienThoai, PDO::PARAM_STR);
            $statement->bindValue(5, $email, PDO::PARAM_STR);
            $statement->execute();
        } catch (PDOException $e) {
        }
    }

    public function DeleteEmployee($nhanvienID)
    {
        $query = "DELETE FROM nhanvien WHERE nhanvienID = :nhanvienID";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':nhanvienID', $nhanvienID, PDO::PARAM_INT);
            if ($statement->execute()) {
                return true;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function CreateEmployee($hoVaTen, $diaChi, $soDienThoai, $email, $chucVuID)
    {
        $query1 = "INSERT INTO `nhanvien`(`hoVaTen`, `chucVuID`, `DiaChi`, `SoDienThoai`, `email`) VALUES ( :hoVaTen, :chucVuID, :diaChi, :soDienThoai, :email)";
        try {
            $statement = $this->connect->prepare($query1);
            $statement->bindValue(':hoVaTen', $hoVaTen, PDO::PARAM_STR);
            $statement->bindValue(':chucVuID', $chucVuID, PDO::PARAM_INT);
            $statement->bindValue(':diaChi', $diaChi, PDO::PARAM_STR);
            $statement->bindValue(':soDienThoai', $soDienThoai, PDO::PARAM_STR);
            $statement->bindValue(':email', $email, PDO::PARAM_STR);
            $statement->execute();
        } catch (PDOException $e) {
        }
    }

    public function GetAllSalary($from) {
        $query1 = "SELECT n1.nhanvienID, n1.hoVaTen, SUM(Tien) as tp from (nhanvien as n1 LEFT JOIN thuongphat as tp on n1.nhanvienID = tp.NhanVienID and tp.ngay >= ?) GROUP BY n1.nhanvienID;";
        $query2 = "SELECT n1.nhanvienID, (SUM(sogio) * chucvu.HeSo * 50000) as luong from (nhanvien as n1 JOIN calam on n1.nhanvienID = calam.NhanVienID JOIN chucvu on chucvu.ChucVuID = n1.chucvuID and calam.Ngay >= ?) GROUP BY n1.nhanvienID;";
        $statement = $this->connect->prepare($query1);
        $statement->bindValue(1, $from, PDO::PARAM_STR);
        $statement->execute();
        $result1 = $statement->fetchAll();
        
        $statement = $this->connect->prepare($query2);
        $statement->bindValue(1, $from, PDO::PARAM_STR);
        $statement->execute();
        $result2 = $statement->fetchAll();

        $result = array();
        foreach($result1 as $key=>$value) {
            if(is_null($value['tp'])) {
                $value['tp'] = 0;
            }
            foreach($result2 as $key2=>$value2) {
                if($value['nhanvienID'] == $value2['nhanvienID']) {
                    $value['tp'] += $value2['luong'];
                }
            }
            array_push($result, $value);
        }
        return $result;
    }
}

?>