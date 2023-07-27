<?php 
include '../lib/Session.php';
Session::checkAdminSession();
include '../classes/Notice.php';
$notice = new Notice();
if(isset($_GET['ac_id'])){
    $active_file_id = $_GET['ac_id'];
    $notice->ActiveNotice($active_file_id);
}
if(isset($_GET['dec_id'])){
    $deactive_file_id = $_GET['dec_id'];
    $notice->DeactiveNotice($deactive_file_id);
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
									$AllNotice = $notice->getAllNotice();
									if($AllNotice){
										$i=0;
									while ($row = $AllNotice->fetch_assoc()) {
										$i++;
								?>
                                    <tr class="odd gradeX" style="width: 100%;">
                                        <td class="text-center"><?php echo $i; ?></td>
                                        <td class="center"><?php echo $row['title']; ?></td>
                                        <td class="text-center"><?php echo $row['dated']; ?></td>
                                        <td class="text-center">
                                            <a href="../view-pdf.php?fid=<?php echo $row['id']; ?>"
                                                class="btn btn-sm btn-warning" target="_blank">View File</a>
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