<?php

class thuongphat extends Controller
{
    private $thuongphat;

    public function __construct()
    {
        $this->thuongphat = $this->model("ThuongPhatModel");
    }
    public function sua() {
        $tien = $_POST['tien'];
        $phatID = $_POST['phatID'];
        $ngay = $_POST['ngay'];
        $ghichu = $_POST['ghichu'];
        $nhanvienID = $_POST['NhanVienID'];
        $managerID = intval($_SESSION['managerID']);
        $this->thuongphat->UpdateThuongPhat(
            intval($phatID),
            intval($nhanvienID),
            $ghichu,
            floatval($tien),
            $managerID,
            $ngay
        );
        header("Location: /btl3/manage/thuongphat");
        exit();
    }
    public function them() {
        $nhanvienID = $_POST['NhanVienID'];
        $tien = $_POST['tien'];
        $ngay = $_POST['ngay'];
        $ghiChu = $_POST['ghiChu'];
        $managerID = intval($_SESSION['managerID']);
        $this->thuongphat->CreateThuongPhat(
            $nhanvienID,
            $ghiChu,
            floatval($tien),
            $managerID,
            $ngay
        );
        header("Location: /btl3/manage/thuongphat");
        exit();
    }
    public function xoa() {
        $phatID = $_POST['phatID'];
        $this->thuongphat->DeleteThuongPhat(
            intval($phatID)
        );
        header("Location: /btl3/manage/thuongphat");
        exit();
    }
}
