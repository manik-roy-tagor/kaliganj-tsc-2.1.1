<?php 
include '../lib/Session.php';
Session::checkAdminSession();
include '../classes/Additional.php';
$Ad = new Additional();
if(isset($_GET['ac_id'])){
    $active_file_id = $_GET['ac_id'];
    $Ad->EditInformation($active_file_id);
}
if(isset($_GET['dec_id'])){
    $deactive_file_id = $_GET['dec_id'];
    $Ad->DelInformation($deactive_file_id);
}
if(isset($_GET['ac_id'])){
    $active_file_id = $_GET['ac_id'];
    $Ad->ActiveAbout($active_file_id);
}
if(isset($_GET['dec_id'])){
    $deactive_file_id = $_GET['dec_id'];
    $Ad->DeactiveAbout($deactive_file_id);
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
                        <h3>Notice</h3>
                        <div class="table-responsive">
                            <table class="table table-hover" id="example">
                                <thead>

                                    <tr style="width: 100%;">
                                        <th colspan="6" class="text-center">All Notice</th>
                                    </tr>
                                    <tr style="width: 100%;">
                                        <th class="text-center">SL</th>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php								
									$AllAboutUs = $Ad->getAboutUsList();
									if($AllAboutUs){
										$i=0;
									while ($row = $AllAboutUs->fetch_assoc()) {
										$i++;
								?>
                                    <tr class="odd gradeX" style="width: 100%;">
                                        <td class="text-center"><?php echo $i; ?></td>
                                        <td class="center"><?php echo $row['post_title']; ?></td>
                                        <td class="text-center"><?php echo $row['post_dated']; ?></td>
                                        <td class="text-center">
                                            <a href="editpage.php?pid=<?php echo $row['id']; ?>"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <?php if($row['isActive'] == '0'){?>
                                            <a href="?ac_id=<?php echo $row['id']; ?>"
                                                class="btn btn-sm btn-success">Active</a>
                                            <?php } else {?>
                                            <a href="?dec_id=<?php echo $row['id']; ?>"
                                                class="btn btn-sm btn-danger">Deactive</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php	} }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- content-wrapper ends -->
        <?php include("inc/footer.php"); ?>