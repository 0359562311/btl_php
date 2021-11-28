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

    public function GetEmployeeWithId($IdAccount)
    {
        $query = "SELECT IdAccount, Username, Password, Name, Email, PhoneNum, State, Gender, Hire_Date, Job, Birth_Date, Department_Name FROM Account INNER JOIN Employess E on Account.IdAccount = E.IdAccount_Employess INNER JOIN Dept_Emp DE on E.IdAccount_Employess = DE.IdAccount_Employess INNER JOIN Department D on DE.Department_Number = D.Department_Number WHERE IdAccount=:id";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':id', $IdAccount, PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            if ($count > 0) {
                $result = $statement->fetch();
                return $result;
            } else return false;
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

    public function GetLeaDayForm($IdAccount)
    {
        $query = "SELECT * FROM Leave_Day_Form WHERE IdAccount_Employess=:id";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':id', $IdAccount, PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            if ($count > 0) {
                $result = $statement->fetchAll();
                return $result;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function GetLeaDayFormWithFormID($IdForm)
    {
        $query = "SELECT * FROM Leave_Day_Form WHERE IdForm=:id_form";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':id_form', $IdForm, PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            if ($count > 0) {
                $result = $statement->fetch();
                return $result;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function EditLeaDayForm($IdAccount, $IdForm, $Start_Date, $End_Date, $Reason)
    {
        $query = "UPDATE Leave_Day_Form SET Start_Date=:start_date, End_Date=:end_date, Reason=:reason WHERE IdAccount_Employess=:id AND IdForm=:id_form";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':start_date', $Start_Date, PDO::PARAM_STR);
            $statement->bindValue(':end_date', $End_Date, PDO::PARAM_STR);
            $statement->bindValue(':reason', $Reason, PDO::PARAM_STR);
            $statement->bindValue(':id', $IdAccount, PDO::PARAM_STR);
            $statement->bindValue(':id_form', $IdForm, PDO::PARAM_STR);
            if ($statement->execute()) {
                return true;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function GetAmountLeaForm()
    {
        $query = "SELECT * FROM Leave_Day_Form";
        try {
            $statement = $this->connect->prepare($query);
            $statement->execute();
            $count = $statement->rowCount();
            if ($count > 0) {
                return $count;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function GetUserFromForm($IdForm)
    {
        $query = "SELECT IdAccount_Employess FROM Leave_Day_Form WHERE IdForm=:id_form";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':id_form', $IdForm, PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            if ($count > 0) {
                $result = $statement->fetch();
                return $result;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function DeleteForm($IdForm)
    {
        $query = "DELETE FROM Leave_Day_Form WHERE IdForm=:id_form";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':id_form', $IdForm, PDO::PARAM_STR);
            if ($statement->execute()) {
                return true;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function CreateForm($IdAccount, $IdForm, $Start_Date, $End_Date, $Reason)
    {
        $query = "INSERT INTO Leave_Day_Form (IdAccount_Employess, IdForm, Start_Date, End_Date, Reason) VALUE (:id, :id_form, :start_date, :end_date, :reason)";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':id', $IdAccount, PDO::PARAM_STR);
            $statement->bindValue(':id_form', $IdForm, PDO::PARAM_STR);
            $statement->bindValue(':start_date', $Start_Date, PDO::PARAM_STR);
            $statement->bindValue(':end_date', $End_Date, PDO::PARAM_STR);
            $statement->bindValue(':reason', $Reason, PDO::PARAM_STR);
            if ($statement->execute()) {
                return true;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function GetSalary($IdAccount_Employess, $Month, $Year)
    {
        $query = "SELECT * FROM Salaries WHERE IdAccount_Employess=:id AND Month=:month AND Year=:year";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':id', $IdAccount_Employess, PDO::PARAM_STR);
            $statement->bindValue(':month', $Month, PDO::PARAM_STR);
            $statement->bindValue(':year', $Year, PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            if ($count > 0) {
                $result = $statement->fetch();
                return $result;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function GetStartEndApproveForm($IdAccount_Employess, $Limit1, $Limit2)
    {
        $query = "SELECT Start_Date, End_Date FROM Leave_Day_Form WHERE IdAccount_Employess=:id AND Start_Date >= :limit1 AND End_Date <= :limit2 AND Form_Status='Approved'";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':id', $IdAccount_Employess, PDO::PARAM_STR);
            $statement->bindValue(':limit1', $Limit1, PDO::PARAM_STR);
            $statement->bindValue(':limit2', $Limit2, PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            if ($count > 0) {
                $result = $statement->fetchAll();
                return $result;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function GetNetSalry($IdAccount_Employess, $Month, $Year)
    {
        $query = "SELECT Net_Salary FROM Salaries WHERE IdAccount_Employess=:id AND Month=:month AND Year=:year";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':id', $IdAccount_Employess, PDO::PARAM_STR);
            $statement->bindValue(':month', $Month, PDO::PARAM_STR);
            $statement->bindValue(':year', $Year, PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            if ($count > 0) {
                $result = $statement->fetch();
                return $result;
            } else return false;
        } catch (PDOException $e) {
        }
    }

    public function GetYearSalary($IdAccount_Employess, $Year)
    {
        $query = "SELECT CONVERT((Net_Salary-((Net_Salary/DAY(LAST_DAY(CONVERT(CONCAT(Year,'-0',Month,'-','01'),DATE ))))*Unpaid_leave_day)-50000*Late_day), SIGNED) AS Total_Salary FROM Salaries WHERE IdAccount_Employess=:id AND Year=:year ORDER BY Month ASC";
        try {
            $statement = $this->connect->prepare($query);
            $statement->bindValue(':id', $IdAccount_Employess, PDO::PARAM_STR);
            $statement->bindValue(':year', $Year, PDO::PARAM_STR);
            $statement->execute();
            $count = $statement->rowCount();
            if ($count > 0) {
                $result = $statement->fetchAll();
                return $result;
            } else return false;
        } catch (PDOException $e) {
        }
    }
}

?>