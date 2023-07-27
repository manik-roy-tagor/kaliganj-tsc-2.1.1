<?php 
error_reporting(0);
include '../lib/Session.php';
Session::checkAdminSession();
include '../classes/Additional.php';
$additional = new Additional();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
 	$add_desc        = $_POST['add_desc'];
    $allowTypes     = array('jpg','png','jpeg','gif','pdf');
    $filename       = $_FILES["file_name"]["name"];
    $tempname       = $_FILES["file_name"]["tmp_name"];      
    $GallaryUpload   = $additional->GallaryUpload($filename, $add_desc, $tempname);
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
                        <h4 class="card-title">Add Gallary</h4>
                        <p class="card-description">
                           Gallary/Citizen Chartar Upload Here....
                        </p>
                        <?php if(isset($GallaryUpload)){
                            echo $GallaryUpload;
                        }?>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="files">Photo Gallary</label>
                                <input type="file" class="form-control" name="file_name" id="files" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="desc">Photo For</label>
                                <select name="add_desc" id="desc" class="form-control">
                                    <option value="Gallary" active>Gallary</option>
                                    <option value="Citizen Chartar">Citizen Chartar</option>
                                    <option value="Citizen Chartar">Bannar</option>
                                    <option value="Citizen Chartar">Logo</option>
                                </select>
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