<?php

    include("../secure/condb.php");
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $userPrefix = $_POST["userPrefix"];
        $userFirstname = $_POST["userFirstname"];
        $userLastname = $_POST["userLastname"];
        $posts = $_POST["posts"];
        $agency = $_POST["agency"];
        $tel = $_POST["tel"];
        $image = $_FILES["image"]["name"];
        $signature_file = $_FILES["signature_file"]["name"];
        $roleID = $_POST["roleID"];
        $updateBy = $_SESSION["userMemberCode"];
        
       
        $sql = "UPDATE 
                    users 
                    SET 
                        username = '$username',                
                        password = '$password',
                        email = '$email',
                        userPrefix = '$userPrefix',
                        userFirstname = '$userFirstname',
                        userLastname = '$userLastname',
                        posts = '$posts',
                        agency = '$agency',
                        tel = '$tel',
                        image = '$image',
                        signature_file = '$signature_file',
                        roleID = '$roleID',
                        dateUpdate = NOW(),
                        timeUpdate = NOW(),
                        updateBy = '$updateBy'
                    WHERE id = '$id'
                        ";
        
        $result = mysqli_query($condb, $sql);

        if($result){
            echo "บันทึกข้อมูลสำเร็จ";
            header("Location: manage_users.php");
            exit;
        } else {
            echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
        }
    }

?>
