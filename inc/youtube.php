<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Youtube</h6>
            <h1 class="mb-5">Youtube Content</h1>
        </div>
        <div class="row">
            <?php								
               $getAllYTV = $additional->getYoutubeTopic();
               if($getAllYTV){
                $i = 0; 
               while ($row = $getAllYTV->fetch_assoc()) {
                $i++;
            ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <iframe width="100%" height="315" src="<?php echo $row['Youtube_Links']; ?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                      </div>            
            <?php  } }?>


        </div>
    </div>
</div>
<!-- Courses End -->

<style>
.cusTrade {}
</style>