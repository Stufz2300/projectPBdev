<!-- Header. -->
<?php include("header.php"); ?>

<!-- Left Menu. -->
<?php include("left-menu.php") ?>

<?php include("../secure/condb.php"); ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>เพิ่มข้อมูลผู้ใช้งาน <?php //echo $row["userFirstname"]; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main.php">หน้าแรก (ผู้ดูแลระบบ)</a></li>
              <li class="breadcrumb-item"><a href="manage_users.php">จัดการข้อมูลผู้ใช้งาน</a></li>
              <li class="breadcrumb-item active">เพิ่มข้อมูลผู้ใช้งาน</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">

        <form method="post" action="add_user.php" enctype="multipart/form-data">

          <div class="card-header">
            <h3 class="card-title">เพิ่มข้อมูลผู้ใช้งาน</h3>

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
                <option value="" selected>กรุณาเลือกรายการ</option>
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
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

            <div class="form-group">
                <label for="image" class="col-sm-3 control-label">รูปภาพ</label>
                <input type="file" class="form-control"id="image" name="image" value="<?php echo $row["image"]; ?>" >
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

<!-- Footer. -->
<?php include("footer.php"); ?>