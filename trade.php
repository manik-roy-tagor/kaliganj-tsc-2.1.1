<?php $page_title = "Our Trades"; 

include('classes/Additional.php');
$additional = new Additional();
include('inc/header.php');?>
<?php include('inc/menubar.php');?>
<?php 
include('classes/Trade.php');
$trade = new Trade();
?>
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Trades</h1>                   
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Courses Start -->
    <?php include('inc/trade.php');?>
    <!-- Courses End -->


<?php include('inc/footer.php');?>