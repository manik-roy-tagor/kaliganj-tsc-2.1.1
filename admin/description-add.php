<?php 
include '../lib/Session.php';
Session::checkAdminSession();
include '../classes/Additional.php';
$st = new Additional();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $stCMsg   = $st->settingsCreated($_POST);
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
                        <h4 class="card-title">Add Description</h4>

                        <?php if(isset($stCMsg)){
                            echo $stCMsg;
                        }?>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" class="form-control" name="post_title" id="title"
                                    placeholder="লক্ষ্য ও উদ্দেশ্য/আমাদের সম্পর্কে">
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