<?php 
error_reporting(1);
include '../lib/Session.php';
Session::checkAdminSession();
include '../classes/Notice.php';
$notice = new Notice();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $notice_title   = $_POST['notice_title'];
 	$descrip        = $_POST['descrip'];
    $allowTypes     = array('jpg','png','jpeg','gif','pdf');
    $filename       = $_FILES["file_name"]["name"];
    $tempname       = $_FILES["file_name"]["tmp_name"];      
    $noticeInsert   = $notice->noticeUpload($notice_title, $descrip, $filename, $tempname);
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
                        <h4 class="card-title">Add Notice</h4>
                        <p class="card-description">
                            Notice Upload Here....
                        </p>
                        <?php if(isset($noticeInsert)){
                            echo $noticeInsert;
                        }?>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="notice_title" id="title" placeholder="title">
                            </div>
                            <div class="form-group">
                                <label for="files">File</label>
                                <input type="file" class="form-control" name="file_name" id="files" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea class="form-control" id="desc" name="descrip" rows="10"></textarea>
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