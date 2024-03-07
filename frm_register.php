<!-- Header. -->
<?php include("header.php"); ?>

<!-- Left Menu. -->
<?php include("left-menu.php") ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>สมัครสมาชิก</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
              <li class="breadcrumb-item active">สมัครสมาชิก</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">

        <form method="post" action="register.php" enctype="multipart/form-data">

          <div class="card-header">
            <h3 class="card-title">สมัครสมาชิก</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>

          </div>
        
          <div class="card-body">

            <div class="form-group">
              <label for="username"><span class="text-danger">*</span> บัญชีผู้ใช้งาน</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="บัญชีผู้ใช้งาน" required>
            </div>

            <div class="form-group">
              <label for="password"><span class="text-danger">*</span> รหัสผ่าน</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน" required>
            </div>

            <div class="form-group">
              <label for="email"><span class="text-danger">*</span> อีเมล์</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล์" required>
            </div>

            <div class="form-group">
              <label for="userPrefix"><span class="text-danger">*</span> คำนำหน้า</label>
              <select class="form-control" id="userPrefix" name="userPrefix" required>
                <option value="">กรุณาเลือกรายการ</option>
                <option value="พันโท">พ.ท.</option>
                <option value="พันตรี">พ.ต.</option>
                <option value="ร้อยเอก">ร.อ.</option>
                <option value="ร้อยโท">ร.ท.</option>
                <option value="ร้อยตรี">ร.ต.</option>
                <option value="จ่าสิบเอก">จ.ส.อ.</option>
                <option value="จ่าสิบโท">จ.ส.ท.</option>
                <option value="จ่าสิบตรี">จ.ส.ต.</option>
                <option value="สิบเอก">ส.อ.</option>
                <option value="สิบโท">ส.ท.</option>
                <option value="สิบตรี">ส.ต.</option>
              </select>
            </div>

            <div class="form-group">
              <label for="userFirstname"><span class="text-danger">*</span> ชื่อ</label>
              <input type="text" class="form-control" id="userFirstname" name="userFirstname" placeholder="ชื่อ" required>
            </div>

            <div class="form-group">
              <label for="userLastname"><span class="text-danger">*</span> นามสกุล</label>
              <input type="text" class="form-control" id="userLastname" name="userLastname" placeholder="นามสกุล" required>
            </div>

            <div class="form-group">
              <label for="agency"><span class="text-danger">*</span> หน่วยงาน</label>
              <input type="text" class="form-control" id="agency" name="agency" placeholder="หน่วยงาน" required>
            </div>

          </div>

          <div class="card-footer text-right">
              <button type="submit" class="btn btn-md btn-success"><i class="fa fa-save"></i> บันทึกข้อมูล</button>
          </div>

        </form>

      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    // JavaScript สำหรับแสดง Alert Box หากมีข้อผิดพลาด
    <?php
      // ตรวจสอบว่ามีข้อผิดพลาดหรือไม่
      if (isset($_GET['error'])) {
        $error = $_GET['error'];
        echo "alert('$error');";
      }
    ?>
  </script>

<!-- Footer. -->
<?php include("footer.php"); ?>