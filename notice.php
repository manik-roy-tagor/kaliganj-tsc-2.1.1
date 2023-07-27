<?php $page_title = "Notice Board"; 

include('classes/Additional.php');
$additional = new Additional();
include('inc/header.php');?>
<?php include('inc/menubar.php');?>
<?php 
include('classes/Notice.php');
$notice = new Notice();
?>
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Notice</h1>                    
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Team Start -->
    <?php include('inc/notice.php');?>
    <!-- Team End -->
        

<?php include('inc/footer.php');?>