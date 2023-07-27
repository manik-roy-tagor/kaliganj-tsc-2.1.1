<?php $page_title = "Our Team"; 

include('classes/Additional.php');
$additional = new Additional();
include('inc/header.php');?>
<?php include('inc/menubar.php');?>
<?php 
include('classes/Team.php');
$team = new Team();
?>
<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Citizen Chartar</h1>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Team Start -->
<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Kaliganj TSC, Lalmonirhat</h6>
            <h1 class="mb-5">Citizen Chartar</h1>
        </div>
        <div class="row g-4">
            <?php								
                $getCz = $additional->getCitizenChatar();
                if($getCz){
                    $i = 0; 
                while ($row = $getCz->fetch_assoc()) {
                    $i++;
                ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 wow fadeInUp" data-wow-delay="0.1s">
                <img src="files/gallary/<?php echo $row['photo_name']; ?>" alt="<?php echo $row['photo_name']; ?>" height="100%"
                    width="100%">
            </div>
            <?php } }?>

        </div>
    </div>
</div>
<!-- Team End -->
<!-- Team End -->


<?php include('inc/footer.php');?>