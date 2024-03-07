<!-- Header. -->
<?php include("header.php"); ?>

<!-- Connect DB. -->
<?php include("../secure/condb.php"); ?>

<!-- DataTables -->
<link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<!-- Left Menu. -->
<?php include("left-menu.php") ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>จัดการข้อมูลผู้ใช้งาน</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">หน้าแรก</a></li> -->
              <li class="breadcrumb-item active">จัดการข้อมูลผู้ใช้งาน</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Start Container fluid. -->
        <div class="container-fluid">

            <!-- Start table row. -->
            <div class="row">

                <!-- Start col-12. -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title"></h3>

                        </div>

                        <div class="card-body">

                            <a class="btn btn-md btn-success" href="frm_add_user.php"><i class="fa fa-plus-square"></i> เพิ่มข้อมูล</a>
                            
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>รูปภาพ</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>ตำแหน่ง</th>
                                        <th>หน่วยงาน</th>
                                        <th>เบอร์โทร</th>
                                        <th>รหัสสมาชิก</th>
                                        <th>อีเมล์</th>
                                        <th>ลายเซ็น</th>
                                        <th>สิทธ์</th>
                                        <th>เครื่องมือ</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php 
                                        $sql = "SELECT a.*, b.roleName FROM users AS a LEFT JOIN role AS b ON a.roleID = b.roleID";
                                        $result = mysqli_query($condb, $sql);
                                        $count = 1;
                                        while($rows = mysqli_fetch_array($result)){
                                    ?>
                                    <tr>
                                        <td><?php echo $count++; ?></td>
                                        <td><img src="../temp_name/<?php echo $rows["image"]; ?>" alt="รูปภาพ" style="max-width: 50px;"></td>
                                        <td><?php echo $rows["userPrefix"].$rows["userFirstname"]." ".$rows["userLastname"]; ?></td>
                                        <td><?php echo $rows["posts"]; ?></td>
                                        <td><?php echo $rows["agency"]; ?></td>
                                        <td><?php echo $rows["tel"]; ?></td>
                                        <td><?php echo $rows["userMemberCode"]; ?></td>   
                                        <td><?php echo $rows["email"]; ?></td>
                                        <td><img src="../temp_name/<?php echo $rows["signature_file"]; ?>" alt="ลายเซ็น" style="max-width: 50px;"></td>
                                        <td><?php echo $rows["roleName"]." (".$rows["roleID"].")"; ?></td>
                                       
                                        <td>

                                            <a class="btn btn-sm btn-warning" 
                                                href="frm_edit_user.php?id=<?php echo $rows["id"]; ?>"><i class="fa fa-edit"></i></a>

                    

                                                <a class="btn btn-sm btn-danger

                                                    <?php
                                                        if($_SESSION["roleID"] == 900 && $rows["userMemberCode"] == $_SESSION["userMemberCode"]){
                                                            echo "disabled";
                                                        }
                                                    ?>"

                                                    href="delete_user.php?id=<?php echo $rows["id"]; ?>"
                                                    onclick="return confirm('คุณแน่ใจที่ต้องการลบข้อมูลผู้ใช้งาน ?')"

                                                    <?php
                                                        if($_SESSION["roleID"] == 900 && $rows["userMemberCode"] == $_SESSION["userMemberCode"]){
                                                            echo "disabled";
                                                        }
                                                    ?>

                                                    ><i class="fa fa-trash"></i></a>

                                            

                                        </td>
                                    </tr>

                                    <?php } ?>
                                
                                </tbody>

                                <!-- <tfoot>
                                    <tr>
                                        <th>Rendering engine</th>
                                        <th>Browser</th>
                                        <th>Platform(s)</th>
                                        <th>Engine version</th>
                                        <th>CSS grade</th>
                                    </tr>
                                </tfoot> -->

                            </table>

                        </div>
                        <!-- End of card-body. -->
                        
                    </div>

                </div>
                <!-- End of col-12. -->

            </div>
            <!-- End of table row. -->

        </div>
        <!-- End of Container fluid. -->



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Footer. -->
<?php include("footer.php"); ?>

<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!--
<script>

    $(document).ready(function(){

        // alert("Hi");

        //Convert data to datatable.
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


    });

</script>
-->
