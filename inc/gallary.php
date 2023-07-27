<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Life is going with</h6>
            <h1 class="mb-5">Our Glorious Gallary</h1>
        </div>
        <div class="row g-4">
            <?php								
                $getFg = $additional->getPhotoGallary();
                if($getFg){
                    $i = 0; 
                while ($row = $getFg->fetch_assoc()) {
                    $i++;
                ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
                <img src="files/gallary/<?php echo $row['photo_name']; ?>" alt="<?php echo $row['photo_name']; ?>" height="100%" width="100%">
            </div>
            <?php } }?>

        </div>
    </div>
</div>
<!-- Team End -->