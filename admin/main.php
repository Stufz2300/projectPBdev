<!-- Header. -->
<?php include("header.php"); ?>

<!-- Left Menu. -->
<?php include("left-menu.php") ?>

<?php include("../secure/condb.php");

// Query สำหรับดึงข้อมูลจำนวนสมาชิก
$users = "SELECT COUNT(*) AS usersCount FROM users";
$resultusers = mysqli_query($condb, $users);
$rowusers = mysqli_fetch_assoc($resultusers);

// Query สำหรับดึงข้อมูลรายการวัสดุ
/*$product = "SELECT COUNT(*) AS productCount FROM product";
$resultproduct = mysqli_query($condb, $product);
$rowproduct = mysqli_fetch_assoc($resultproduct);

// Query สำหรับดึงข้อมูลรอตรวจสอบ
$sqlPending = "SELECT COUNT(*) AS pendingCount FROM orders WHERE statusID = 10";
$resultPending = mysqli_query($condb, $sqlPending);

if ($resultPending && $rowPending = mysqli_fetch_assoc($resultPending)) {
    $pendingCount = $rowPending['pendingCount'];
} else {
    $pendingCount = 0;
}

// Query สำหรับดึงข้อมูลอนุมัติการเบิกจ่าย
$sqlApproved = "SELECT COUNT(*) AS approvedCount FROM orders WHERE statusID = 20";
$resultApproved = mysqli_query($condb, $sqlApproved);

if ($resultApproved && $rowApproved = mysqli_fetch_assoc($resultApproved)) {
    $approvedCount = $rowApproved['approvedCount'];
} else {
    $approvedCount = 0;
}

// Query สำหรับดึงข้อมูลไม่อนุมัติการเบิกจ่าย
$sqlRejected = "SELECT COUNT(*) AS rejectedCount FROM orders WHERE statusID = 30";
$resultRejected = mysqli_query($condb, $sqlRejected);

if ($resultRejected && $rowRejected = mysqli_fetch_assoc($resultRejected)) {
    $rejectedCount = $rowRejected['rejectedCount'];
} else {
    $rejectedCount = 0;
}*/
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $rowusers['usersCount']; ?></h3>

                <p>สมาชิก</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="manage_users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>  
    <!-- /.content-wrapper -->
      </div>
    </section>
  </div>    
<!-- Footer. -->
<?php include("footer.php"); ?>