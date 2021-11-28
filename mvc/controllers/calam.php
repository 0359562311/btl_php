<?php

class calam extends Controller
{
    private $CaLam;

    public function __construct()
    {
        $this->CaLam = $this->model("CaLamModel");
    }

    public function index()
    {
        $this->View("leftbar",[
            "type" => "calam"
        ]);
        $this->View("calam_view", [
            "calam" => $data
        ]);
        $this->View("rightbar");
    }
    public function sua() {
        $CaLamID = $_POST['CaLamID'];
        $soGio = $_POST['soGio'];
        $ngay = $_POST['ngay'];
        $this->CaLam->UpdateCaLam(
            $CaLamID,
            floatval($soGio),
            $ngay
        );
        header("Location: /btl3/manage/calam");
    }
    public function them() {
        $nhanvienID = $_POST['nhanvienID'];
        $soGio = $_POST['soGio'];
        $ngay = $_POST['ngay'];
        $this->CaLam->CreateCaLam(
            $nhanvienID,
            floatval($soGio),
            $ngay
        );
        header("Location: /btl3/manage/calam");
        exit();
    }
    public function xoa() {
        $nhanvienID = $_POST['CaLamID'];
        $this->CaLam->DeleteCalam(
            intval($nhanvienID)
        );
        header("Location: /btl3/manage/calam");
        exit();
    }
}

?>