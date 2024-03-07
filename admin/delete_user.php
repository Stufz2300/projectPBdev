<?php
include("../secure/condb.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $condb->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "ลบข้อมูลสำเร็จ";
        header("Location: manage_users.php");
        exit;
    } else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ไม่พบ ID ที่ต้องการลบ";
}

$condb->close();
?>