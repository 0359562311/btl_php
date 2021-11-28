<?php
// require_once("/btl3/mvc/core/Controller.php");
class login extends Controller
{
    private $User;

    public function __construct()
    {
        $this->User = $this->model("User");
    }

    function index()
    {
        if (isset($_POST['username'])) {
            
            try {
                //checking empty fields
                if (empty($_POST['username'])) {
                    throw new Exception("Username is required!");
                }
                if (empty($_POST['password'])) {
                    throw new Exception("Password is required!");
                }
                //delete space and special char in form data
                $username = trim($_POST['username']);
                $password = $_POST['password'];
                $result = $this->User->LoginCheck($username, $password); //check if user is login
                if ($result == false) {
                    // header("location: home");
                    $this->View("home_view", [
                        "error" => "Tài khoản hoặc mật khẩu không chính xác"
                    ]);
                } else {
                    session_regenerate_id(); //regenerate session
                    $_SESSION['managerID'] = $result['managerID']; //save id to session
                    $_SESSION['username'] = $username;
                    header('Location: home');
                    session_write_close();
                }
            } //end of try block
            catch (Exception $e) {
                $error_msg = $e->getMessage();
                $this->View("home_view", [
                    "error" => $error_msg
                ]);
            }
        } else {
            $this->View("home_view", []);
        }
        
    }

}