<!DOCTYPE html>
<html>
<head>
    <?php

    include "include/connection.php";
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
                                            <th>UH ID Number</th>
                                            <th>SSA Number</th>
                                            <th>Aadhar No.</th>
                                            <th>Patient Name</th>
                                            <th>View Detail</th>

                                        </tr>
                                        <tbody>
                                        <?php


                                        $res_pending = mysqli_query($con, "SELECT * FROM patient_details");

                                        while ($row = mysqli_fetch_assoc($res_pending)) {

                                            $checkbox1 = '';
                                            $checkbox2 = '';
                                            $checkbox3 = '';
                                            $checkbox4 = '';
                                            $checkbox5 = '';
                                            $checkbox6 = '';


                                            if (!empty($row['bpcheckbox'])) {
                                                $checkbox1 = "checked";
                                            }

                                            if (!empty($row['sugarcheckbox'])) {
                                                $checkbox2 = "checked";
                                            }

                                            if (!empty($row['heartcheckbox'])) {
                                                $checkbox3 = "checked";
                                            }


                                            if (!empty($row['kidneycheckbox'])) {
                                                $checkbox4 = "checked";
                                            }

                                            if (!empty($row['paralysischeckbox'])) {
                                                $checkbox5 = "checked";
                                            }

                                            if (!empty($row['thyroidcheckbox'])) {
                                                $checkbox6 = "checked";
                                            }


                                            echo "<tr>";
                                            echo "<td>" . $row['uhidno'] . "</td>";
                                            echo "<td>" . $row['ssano'] . "</td>";
                                            echo "<td>" . $row['adharnumber'] . "</td>";
                                            echo "<td>" . $row['patientname'] . "</td>";

                                            echo "<td>";
                                            echo "<button type='button' class='btn btn-link' data-toggle = 'modal' data-target = '#studentdetails-" . $row['pid'] . "'> View </button>
												
												   <div class=\"modal fade\" id='studentdetails-" . $row['pid'] . "'>
             <div class=\"modal-dialog modal-lg\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title\">Student Details</h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
 <div class=\"card card-primary\">
                       

           <div class=\"card-body\">
                                    <div class=\"form-group\">
                                        <label for=\"uhidno\">UH ID Number</label>
                                        <input    value='" . $row['uhidno'] . "' disabled class=\"form-control\" id=\"uhidno\" name=\"uhidno\"
                                               placeholder=\"Enter UH ID Number\" type=\"text\" 
                                               disabled
                                               >
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"ssano\">SSA Number</label>
                                        <input  value='" . $row['ssano'] . "' disabled class=\"form-control\" id=\"ssano\" name=\"ssano\"
                                               placeholder=\"Enter SSA Number\" type=\"text\" disabled>
                                    </div>


                                    <div class=\"form-group\">
                                        <label for=\"adharnumber\">Adhar Number No.</label>
                                        <input  value='" . $row['adharnumber'] . "' disabled class=\"form-control\" id=\"adharnumber\" min=\"0\" name=\"adharnumber\"
                                               placeholder=\"Enter Adhar Number\"
                                               type=\"number\" disabled>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"patientname\">Patient Name</label>
                                                <input  value='" . $row['patientname'] . "' disabled class=\"form-control\" id=\"patientname\" name=\"patientname\"
                                                       placeholder=\"Enter Patient Name\"
                                                       type=\"text\" disabled>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"patientphone\">Patient Phone Number</label>
                                                <input  value='" . $row['patientphone'] . "' disabled class=\"form-control\" id=\"patientphone\" name=\"patientphone\"
                                                       placeholder=\"Enter Patient Phone\"
                                                       type=\"number\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"patientage\">Patient Age</label>
                                                <input  value='" . $row['patientage'] . "' disabled class=\"form-control\" id=\"patientage\" name=\"patientage\"
                                                       placeholder=\"Enter Patient Age\"
                                                       type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">

                                            <div class=\"form-group\">
                                                <label for=\"patientgender\">Patient Gender</label>
                                                <select disabled class=\"form-control\" id=\"patientgender\" name=\"patientgender\">
                                                      <option value=\"\">" . $row['patientgender'] . "</option>
                                                 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"patientaddress\">Patient Address</label>
                                        <textarea  value=''  disabled disabled class=\"form-control\" id=\"patientaddress\"
                                                  name=\"patientaddress\" placeholder=\"Enter Patient Address\"
                                                  rows=\"4\"
                                        >" . $row['patientaddress'] . "</textarea>
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"patientsymptoms\">Patient Symptoms</label>
                                        <textarea  value=''  disabled class=\"form-control\" id=\"patientsymptoms\"
                                                  name=\"patientsymptoms\" placeholder=\"Enter Sympotoms\"
                                                  rows=\"4\"
                                        >" . $row['patientsymptoms'] . "</textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input   disabled class=\"custom-control-input disabled\" id=\"bpcheckbox\"
                                                           name=\"bpcheckbox\" type=\"checkbox\" " . $checkbox1 . "
                                                           value=\"bp\">
                                                    <label class=\"custom-control-label\" for=\"bpcheckbox\"> BP</label>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input   disabled class=\"custom-control-input disabled\" id=\"sugarcheckbox\"
                                                           name=\"sugarcheckbox\" type=\"checkbox\" " . $checkbox2 . " 
                                                           
                                                           
                                                           value=\"sugar\">
                                                    <label class=\"custom-control-label\"
                                                           for=\"sugarcheckbox\">Sugar</label>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input  disabled class=\"custom-control-input disabled\" id=\"heartcheckbox\"
                                                           name=\"heartcheckbox\" type=\"checkbox\" " . $checkbox3 . "
                                                           value=\"heart\">
                                                    <label class=\"custom-control-label\"
                                                           for=\"heartcheckbox\">Heart</label>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input  disabled class=\"custom-control-input disabled\" id=\"kidneycheckbox\"
                                                           name=\"kidneycheckbox\" type=\"checkbox\" " . $checkbox4 . "
                                                           value=\"heart\">
                                                    <label class=\"custom-control-label\"
                                                           for=\"kidneycheckbox\">Kidney</label>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input   disabled class=\"custom-control-input disabled\" id=\"paralysischeckbox\"
                                                           name=\"paralysischeckbox\"
                                                           type=\"checkbox\" " . $checkbox5 . "
                                                           value=\"heart\">
                                                    <label class=\"custom-control-label\" for=\"paralysischeckbox\">Paralysis</label>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input   disabled class=\"custom-control-input disabled\" id=\"thyroidcheckbox\"
                                                           name=\"thyroidcheckbox\"
                                                           type=\"checkbox\" " . $checkbox6 . "
                                                           value=\"heart\">
                                                    <label class=\"custom-control-label\"
                                                           for=\"thyroidcheckbox\">Thyroid</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"patientdiagnosis\">Patient Diagnosis</label>
                                        <textarea  value=''  disabled class=\"form-control\" id=\"patientdiagnosis\"
                                                  name=\"patientdiagnosis\" placeholder=\"Enter Details\"
                                                  rows=\"4\"
                                        >" . $row['patientdiagnosis'] . "</textarea>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"patientbloodgroup\">Patient Blood Group</label>
                                                <select disabled class=\"form-control\" id=\"patientbloodgroup\"
                                                        name=\"patientbloodgroup\">
                                                    <option value=\"\">" . $row['patientbloodgroup'] . "</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"patienthb\">Patient HB</label>
                                                <input  value='" . $row['patienthb'] . "' disabled class=\"form-control\" id=\"patienthb\" name=\"patienthb\"
                                                       placeholder=\"Enter Patient HB\"
                                                       type=\"text\">
                                            </div>
                                        </div>

                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <div class=\"form-group\">
                                                <label for=\"patientkft\">Patient KFT</label>
                                                <input  value='" . $row['patientkft'] . "' disabled class=\"form-control\" id=\"patientkft\" name=\"patientkft\"
                                                       placeholder=\"Enter Details\"
                                                       type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">

                                            <div class=\"form-group\">
                                                <label for=\"patientecg\">Patient ECG</label>
                                                <input  value='" . $row['patientecg'] . "' disabled class=\"form-control\" id=\"patientecg\" name=\"patientecg\"
                                                       placeholder=\"Enter Details\"
                                                       type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"form-group\">
                                                <label for=\"patienteco\">Patient ECO</label>
                                                <input  value='" . $row['patienteco'] . "' disabled class=\"form-control\" id=\"patienteco\" name=\"patienteco\"
                                                       placeholder=\"Enter Details\"
                                                       type=\"text\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"patienttreatment\">Patient Treatment</label>
                                        <textarea  value=''  disabled class=\"form-control\" id=\"patienttreatment\"
                                                  name=\"patienttreatment\" placeholder=\"Enter Details\"
                                                  rows=\"4\"
                                        >" . $row['patienttreatment'] . "</textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"patientpriscription\">Patient Prescription</label>
                                        <textarea  value=''  disabled class=\"form-control\" id=\"patientpriscription\"
                                                  name=\"patientpriscription\" placeholder=\"Enter Details\"
                                                  rows=\"4\"
                                        >" . $row['patientpriscription'] . "</textarea>
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"patientspecialadvise\">Speacial Advise</label>
                                        <textarea  value=''  disabled class=\"form-control\" id=\"patientspecialadvise\"
                                                  name=\"patientspecialadvise\" placeholder=\"Enter Details\"
                                                  rows=\"4\"
                                        >" . $row['patientspecialadvise'] . "</textarea>
                                    </div>

                                </div>
                                </div>
                     



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

                                        }
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