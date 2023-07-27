
    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Our Trades</h1>
            </div>
            <div class="row g-4 justify-content-center">

            <?php								
                $getAllTrades = $trade->getAllTrade();
                if($getAllTrades){
                while ($row2 = $getAllTrades->fetch_assoc()) {
            ?>

                <div class="col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp cusTrade" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0"><?php echo $row2['Trade_Name']; ?></h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small></small>
                            </div>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i><?php echo $row2['Sections']; ?></small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i><?php echo $row2['Total_Batches']; ?> Batches</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i><?php echo $row2['Total_Student']; ?> Students</small>
                        </div>
                    </div>
                </div>
                <?php } }?>

            </div>
        </div>
    </div>
    <!-- Courses End -->

    <style>
        .cusTrade{
            
        }
    </style>
