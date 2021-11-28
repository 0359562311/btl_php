<?php

class api extends Controller {
    private $employee;

    public function __construct()
    {
        $this->employee = $this->model("EmployeeModel");
    }

    public function tinhluong($from) {
        $result = $this->employee->GetAllSalary($from);
        echo json_encode($result,JSON_UNESCAPED_UNICODE);
    }
}