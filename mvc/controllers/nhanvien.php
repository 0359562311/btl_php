<?php

class nhanvien extends Controller
{
    private $User;
    private $Employee;

    public function __construct()
    {
        $this->User = $this->model("User");
        $this->Employee = $this->model("EmployeeModel");
    }

    public function index()
    {
        $this->View("leftbar",[
            "type" => "nhanvien"
        ]);
        $this->View("nhanvien", [
            "nhanvien" => $data
        ]);
        $this->View("rightbar");
    }
    public function sua() {
        $nhanvienID = $_POST['nhanvienID'];
        $hoVaTen = $_POST['hoVaTen'];
        $diaChi = $_POST['diaChi'];
        $soDienThoai = $_POST['soDienThoai'];
        $email = $_POST['email'];
        $chucVu = $_POST['chucVu'];
        $this->Employee->UpdateInfoEmployee(
            intval($nhanvienID),
            $hoVaTen,
            $diaChi,
            $soDienThoai,
            $email,
            intval($chucVu)
        );
        header("Location: /btl3/manage/nhanvien");
        exit();
    }
    public function them() {
        $hoVaTen = $_POST['hoVaTen'];
        $diaChi = $_POST['diaChi'];
        $soDienThoai = $_POST['soDienThoai'];
        $email = $_POST['email'];
        $chucVu = $_POST['chucVu'];
        $this->Employee->CreateEmployee(
            $hoVaTen,
            $diaChi,
            $soDienThoai,
            $email,
            intval($chucVu)
        );
        header("Location: /btl3/manage/nhanvien");
        exit();
    }
    public function xoa() {
        $nhanvienID = $_POST['nhanvienID'];
        $this->Employee->DeleteEmployee(
            intval($nhanvienID)
        );
        header("Location: /btl3/manage/nhanvien");
        exit();
    }
}
