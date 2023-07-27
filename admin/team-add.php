<?php 
error_reporting(0);
include '../lib/Session.php';
Session::checkAdminSession();
include '../classes/Team.php';
$team = new Team();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){   
    $teamInsert   = $team->teamInsert($_POST);
}
?>
<?php include("inc/header.php"); ?>
<?php include("inc/menubar.php"); ?>
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <?php include("inc/theme_setting.php"); ?>
    <?php include("inc/right_sidebar.php"); ?>
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <?php include("inc/left_sidebar.php"); ?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Team</h4>
                        <p class="card-description">
                            Employee Register Here....
                        </p>
                        <?php if(isset($teamInsert)){
                            echo $teamInsert;
                        }?>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <div class="row">
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="name">Employee Type</label>
                                <select class="form-control" name="emp_type" id="name">
                                    <option value="principal">Principal</option>
                                    <option value="Academic_Incharge">Academic Incharge</option>
                                    <option value="Chief_Instructor">Chief Instructor</option>
                                    <option value="Instructor">Instructor</option>
                                    <option value="Jr_Instructor">Junior Instructor</option>
                                    <option value="Guest_Speaker">Guest Speaker</option>
                                    <option value="Office_Staff">Office Staff</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="name">Employee Name</label>
                                <input type="text" id="name" class="form-control" name="emp_name" placeholder="Type your name" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="designation">Employee Designation</label>
                                <input type="text" id="designation" class="form-control" name="emp_designation" placeholder="Type your Designation" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="dob">Date of Birth</label>
                                <input type="date" id="dob" class="form-control" name="dob" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="phn">Phone No</label>
                                <input type="text" id="phn" class="form-control" name="phn" placeholder="Type phone no" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="emailId">Email ID</label>
                                <input type="email" id="emailId" class="form-control" name="emailId" placeholder="Type email id " required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="tel">Telephone</label>
                                <input type="text" id="tel" class="form-control" name="tel"  placeholder="Type telephone no ">
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="fbId">Facebook</label>
                                <input type="text" id="fbId" class="form-control" name="fbId" placeholder="Type facebook link ">
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                                <label for="twit">Twitter</label>
                                <input type="text" id="twit" class="form-control" name="twit" placeholder="Type twiter link ">
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-12">
                            <label for="photo">Photo <span style="color:red; ">Picture Size must be 300*300px</span></label>
                                <input type="file" class="form-control" name="photo" id="photo" required>
                            </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light" name="cancel">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <?php include("inc/footer.php"); ?>


        <style>
            input{
                border: 1px solid #000;
            }
        </style>