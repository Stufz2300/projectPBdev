<!-- Header. -->
<?php include("header.php"); ?>

<!-- Left Menu. -->
<?php include("left-menu.php") ?>

<?php include("../secure/condb.php"); ?>

<?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM users WHERE id = '$id' ";
    $result = mysqli_query($condb, $sql);
    $row = mysqli_fetch_array($result);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>แก้ไขข้อมูลผู้ใช้งาน <?php //echo $row["userFirstname"]; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="main.php">หน้าแรก (ผู้ดูแลระบบ)</a></li>
              <li class="breadcrumb-item"><a href="manage_users.php">จัดการข้อมูลผู้ใช้งาน</a></li>
              <li class="breadcrumb-item active">แก้ไขข้อมูลผู้ใช้งาน</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">

        <form method="post" action="edit_user.php" enctype="multipart/form-data" onsubmit="endDrawing()">
            
            <!-- Hidden. -->
            <input type="text" id="id" name="id" value="<?php echo $row["id"]; ?>">

          <div class="card-header">
            <h3 class="card-title">แก้ไขข้อมูลผู้ใช้งาน</h3>

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
              <input type="text" class="form-control" id="username" name="username" value="<?php echo $row["username"]; ?>" placeholder="บัญชีผู้ใช้งาน" required>
            </div>

            <div class="form-group">
                <label for="password"><span class="text-danger">*</span> รหัสผ่าน</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $row["password"]; ?>" placeholder="รหัสผ่าน" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="show-password">แสดง</button>
                    </div>
                </div>
            </div>

            <div class="form-group">
              <label for="email"><span class="text-danger">*</span> อีเมล์</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล์" value="<?php echo $row["email"]; ?>" required>
            </div>

            <div class="form-group">
              <label for="userPrefix"><span class="text-danger">*</span> คำนำหน้า</label>
              <select class="form-control" id="userPrefix" name="userPrefix" required>
                <option value="<?php echo $row["userPrefix"] ?>" selected><?php echo $row["userPrefix"]; ?></option>
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
              <input type="text" class="form-control" id="userFirstname" name="userFirstname" value="<?php echo $row["userFirstname"]; ?>" placeholder="ชื่อ" required>
            </div>

            <div class="form-group">
              <label for="userLastname"><span class="text-danger">*</span> นามสกุล</label>
              <input type="text" class="form-control" id="userLastname" name="userLastname" value="<?php echo $row["userLastname"]; ?>" placeholder="นามสกุล" required>
            </div>

            <div class="form-group">
              <label for="posts"><span class="text-danger">*</span> ตำแหน่ง</label>
              <input type="text" class="form-control" id="posts" name="posts" value="<?php echo $row["posts"]; ?>" placeholder="ตำแหน่ง" required>
            </div>

            <div class="form-group">
              <label for="agency"><span class="text-danger">*</span> หน่วยงาน</label>
              <input type="text" class="form-control" id="agency" name="agency" value="<?php echo $row["agency"]; ?>" placeholder="หน่วยงาน" required>
            </div>

            <div class="form-group">
              <label for="tel"><span class="text-danger">*</span> เบอร์โทร</label>
              <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $row["tel"]; ?>" placeholder="เบอร์โทร" required>
            </div>

            <div class="form-group">
              <label for="roleID"><span class="text-danger">*</span> สิทธิ์</label>
              <select class="form-control" id="roleID" name="roleID" required>
                <option value="<?php echo $row["roleID"] ?>" selected><?php echo $row["roleID"]; ?></option>
                <option value="">กรุณาเลือกรายการ</option>
                <option value="500">เจ้าหน้าที่</option>
                <option value="300">หัวหน้าฝ่าย</option>
                <option value="100">ผู้ใช้งานทั่วไป</option>
              </select>
            </div>

            <div class="form-group">
              <label for="image" class="col-sm-3 control-label">รูปภาพ</label><br>
              <img id="previewImage" src="../temp_name/<?php echo $row["image"]; ?>" alt="รูปภาพ" style="max-width: 10%;">
              <input type="file" class="form-control" id="image" name="image" onchange="previewSelectedImage('previewImage')" placeholder="รูปภาพ">
            </div>

            <div class="form-group">
              <label for="signature_file" class="col-sm-3 control-label">ลายเซ็น</label><br>
              <img id="previewSignature" src="../temp_name/<?php echo $row["signature_file"]; ?>" alt="ลายเซ็น" style="max-width: 10%;">
              <input type="file" class="form-control" id="signature_file" name="signature_file" onchange="previewSelectedImage('previewSignature')" placeholder="ลายเซ็น">
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
<!-- e-signature -->

<script>
   function previewSelectedImage(previewId) {
      var input;
      var preview;
      
      if (previewId === 'previewImage') {
         input = document.getElementById('image');
         preview = document.getElementById(previewId);
      } else if (previewId === 'previewSignature') {
         input = document.getElementById('signature_file');
         preview = document.getElementById(previewId);
      }
      
      if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function (e) {
            preview.src = e.target.result;
         }

         reader.readAsDataURL(input.files[0]);
      }
   }
</script>

<script>
    document.getElementById("show-password").addEventListener("click", function() {
        var passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
            this.textContent = "ซ่อน";
        } else {
            passwordField.type = "password";
            this.textContent = "แสดง";
        }
    });
</script>