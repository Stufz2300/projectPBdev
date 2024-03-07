  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="main.php" class="brand-link">
      <span class="brand-text font-weight-light">ระบบเบิกจ่ายวัสดุ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/AdminLTELogo1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["userPrefix"].$_SESSION["userFirstname"]; ?></a>
          <a href="#" class="d-block"><?php echo $_SESSION["roleName"]; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="main.php" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                หน้าแรก
                <span class="right badge badge-danger">ใหม่</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                ข้อมูลผู้ใช้งาน
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="frm_add_user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>เพิ่มข้อมูลผู้ใช้งาน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage_users.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ข้อมูลผู้ใช้งาน</p>
                </a>
              </li>
            </ul>
          </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>