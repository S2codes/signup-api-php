<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Content-Type, Authorization, X-Requested-with');
$data= json_decode(file_get_contents('php://input'), true);
include "../conn.php";

        $name = $data['name'];
        $email = $data['email'];
        $mobile = $data['mobile'];
        $pass = $data['password'];
        if ($name == '' || $email =='' || $mobile == '' || $pass == '') {
            $r = array(
                "status"=> false,
                "msg"=> "Enter Valid Details"
            );
            echo json_encode($r);
            return;
        }

        $email_sql = "SELECT * FROM `registration` WHERE `email` = '$email'";
        $result = mysqli_query($conn, $email_sql);
        $email_num = mysqli_num_rows($result);
        if ($email_num > 0) {
            $r = array(
                "status"=> false,
                "msg"=> "Invalid Credentails"
            );
            echo json_encode($r);
        }
        else {
                $sql = "INSERT INTO `registration`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$pass')";

                if (mysqli_query($conn, $sql)) {
                    $r = array(
                        "status"=> true,
                        "msg"=> "Registraion Success"
                    );
                    echo json_encode($r);
                } else {
                    $r = array(
                        "status"=> false,
                        "msg"=> "Entarnal Server Error"
                    );
                    echo json_encode($r);
                }

        }


?>