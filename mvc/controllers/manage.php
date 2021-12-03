<?php

class manage extends Controller
{
    private $thuongphat;
    private $calam;
    private $employee;

    public function __construct()
    {
        $this->thuongphat = $this->model("ThuongPhatModel");
        $this->calam = $this->model("CaLamModel");
        $this->employee = $this->model("EmployeeModel");
    }

    public function index()
    {
        $data = $this->employee->GetAllEmployee("");
        $this->View("leftbar_view",[
            "type" => "nhanvien"
        ]);
        $this->View("nhanvien_view", [
            "nhanvien" => $data
        ]);
        $this->View("rightbar_view");
    }

    public function nhanvien($q="") {
        $data = $this->employee->GetAllEmployee($q);
        $this->View("leftbar_view",[
            "type" => "nhanvien"
        ]);
        $this->View("nhanvien_view", [
            "nhanvien" => $data,
            "query" => $q
        ]);
        $this->View("rightbar_view");
    }

    public function calam($q="") {
        $data = $this->calam->GetAllCaLam($q);
        $this->View("leftbar_view",[
            "type" => "calam"
        ]);
        $this->View("calam_view",[
            "calam" => $data,
            "query"=> $q
        ]);
        $this->View("rightbar_view");
    }
    public function thuongphat($q="") {
        $data = $this->thuongphat->GetAllThuongPhat($q);
        $this->View("leftbar_view",[
            "type" => "thuongphat"
        ]);
        $this->View("thuongphat_view",[
            "thuongphat" => $data,
            "query" => $q
        ]);
        $this->View("rightbar_view");
    }
    public function tinhluong($q="") {
        $data = $this->thuongphat->GetAllThuongPhat($q);
        $this->View("leftbar_view",[
            "type" => "tinhluong"
        ]);
        $this->View("tinhluong_view",[
            "tinhluong" => $data
        ]);
        $this->View("rightbar_view");
    }
    public function thongke() {
        $data = array();
        $data['best'] = $this->employee->GetThreeBestEmployee();
        $data['hardest'] = $this->employee->GetThreeHardestEmployee();
        $this->View("leftbar_view",[
            "type" => "thongke"
        ]);
        $this->View("thongke_view", $data);
        $this->View("rightbar_view");
    }
}
