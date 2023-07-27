<?php 
include '../lib/Session.php';
Session::checkAdminSession();
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
                <div class="col-sm-12">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview"
                                        role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences"
                                        role="tab" aria-selected="false">Audiences</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics"
                                        role="tab" aria-selected="false">Demographics</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more"
                                        role="tab" aria-selected="false">More</a>
                                </li>
                            </ul>
                            <div>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-otline-dark align-items-center"><i
                                            class="icon-share"></i> Share</a>
                                    <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                                    <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i>
                                        Export</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content tab-content-basic">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                aria-labelledby="overview">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div
                                            class="statistics-details d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="statistics-title">Total Students</p>
                                                <h3 class="rate-percentage">700+</h3>
                                                <!-- <p class="text-danger d-flex"><i
                                                        class="mdi mdi-menu-down"></i><span>-0.5%</span></p> -->
                                            </div>
                                            <div>
                                                <p class="statistics-title">Admission-23</p>
                                                <h3 class="rate-percentage">180+</h3>
                                                <p class="text-success d-flex"><i
                                                        class="mdi mdi-menu-up"></i><span>+30.16%</span></p>
                                            </div>
                                            <div>
                                                <p class="statistics-title">Quality Achievement</p>
                                                <h3 class="rate-percentage">99%</h3>
                                                <p class="text-success d-flex"><i
                                                        class="mdi mdi-menu-up"></i><span>+30.16%</span></p>
                                            </div>
                                            <!-- <div class="d-none d-md-block">
                                                <p class="statistics-title">Avg. Time on Site</p>
                                                <h3 class="rate-percentage">2m:35s</h3>
                                                <p class="text-success d-flex"><i
                                                        class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                            </div>
                                            <div class="d-none d-md-block">
                                                <p class="statistics-title">New Sessions</p>
                                                <h3 class="rate-percentage">68.8</h3>
                                                <p class="text-danger d-flex"><i
                                                        class="mdi mdi-menu-down"></i><span>68.8</span></p>
                                            </div>
                                            <div class="d-none d-md-block">
                                                <p class="statistics-title">Avg. Time on Site</p>
                                                <h3 class="rate-percentage">2m:35s</h3>
                                                <p class="text-success d-flex"><i
                                                        class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <?php include("inc/footer.php"); ?>