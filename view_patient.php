<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/html_head.php";

    ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
    <?php
    include "include/nav_header.php";
    include "include/doctor_sidebar.php";
    ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>View Patient</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Small boxes (Stat box) -->
                <!--                <div class="container-fluid">-->
                <!--                    <div class="row mb-2">-->
                <!--                        <div class="col-12">-->
                <!--                            <h3 class="text-center">Add Patient</h3>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->

                <!-- /.container-fluid -->
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" role="form">
                                <div class="card-body">

                                    <table id="example1" class="table table-bordered table-head-fixed table-striped">
                                        <thead>
                                        <tr>
                                            <th>Grievance ID</th>
                                            <th>Grievance by</th>
                                            <th>Grievance Subject</th>
                                            <th>Grievance Category - Type</th>
                                            <th>View Detail</th>

                                        </tr>
                                        <tbody>
                                        <?php
                                        if (mysqli_num_rows($res_pending) > 0) {
                                        while ($row = mysqli_fetch_assoc($res_pending)) {

                                        echo "<tr>";
                                        echo "<td>dsadas</td>";
                                        echo "<td>sada</td>";
                                        echo "<td>sadas</td>";
                                        echo "<td> dasd</td>";
                                        echo "<td>";
                                        echo "<button type='button' class='btn btn-link' data-toggle = 'modal' data-target = '#studentdetails" . $row['gid'] . "'> " . $namerow['fname'] . " " . $namerow['lname'] . " </button>
												
												   <div class=\"modal fade\" id='studentdetails" . $row['gid'] . "'>
             <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">Student Details</h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <p>All patient Details</p>
            </div>
            <div class=\"modal-footer justify-content-between\">
              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
             
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
 
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

												
											</td>";


                                        ?>

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <?php
    include "include/footer.php";
    ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
</div>


<?php
include "include/javascripts.php";
?>

<script src="./include/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="./include/plugins/jquery-validation/additional-methods.min.js"></script>

<script>
    $(function () {

        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });


</script>
</body>
</html>