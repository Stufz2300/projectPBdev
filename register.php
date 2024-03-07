<?php
include("secure/condb.php");

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$userPrefix = $_POST["userPrefix"];
$userFirstname = $_POST["userFirstname"];
$userLastname = $_POST["userLastname"];
$agency = $_POST["agency"];

// Check if the username already exists
$sql_check_username = "SELECT COUNT(*) AS count FROM users WHERE username = '$username'";
$result_check_username = mysqli_query($condb, $sql_check_username);
$row_check_username = mysqli_fetch_assoc($result_check_username);

if ($row_check_username['count'] > 0) {
    header("Location: frm_register.php?error=ชื่อผู้ใช้งานนี้มีอยู่แล้ว กรุณาเลือกชื่อผู้ใช้อื่น");
    exit;
}

// Member Code
$sql_count_use_id = "SELECT MAX(id) AS currMemCode FROM users";
$result_count_user_id = mysqli_query($condb, $sql_count_use_id);
$currentMemberCode = mysqli_fetch_array($result_count_user_id);
$userMemberCode = "m-".date("ymd")."-".$currentMemberCode["currMemCode"]+1;

// Insert data to database
$sql = "INSERT INTO users
            (username, 
                password, 
                userPrefix, 
                email,
                userMemberCode, 
                userFirstname,
                userLastname,
                agency,
                roleID,
                dateCreate,
                timeCreate,
                createBy
            )VALUES('$username',
                        '$password',
                        '$userPrefix',
                        '$email',
                        '$userMemberCode',
                        '$userFirstname',
                        '$userLastname',
                        '$agency',
                        100,
                        NOW(),
                        NOW(),
                        '$userMemberCode')";

$result = mysqli_query($condb, $sql);

if($result){
    echo "บันทึกข้อมูลสำเร็จ";
    header("Location: index.php");
    exit;
}else{
    echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
}
?>
