<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Notice</h6>
            <h1 class="mb-5">All Notice</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="table-responsive">
                <table class="table table-hover" id="example">
                    <thead>
                        <tr style="width: 100%;">
                            <th colspan="6" class="text-center">Notice Board</th>
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
                        $AllNotice = $notice->getAllActiveNotice();
                        if($AllNotice){
                            $i=0;
                        while ($row = $AllNotice->fetch_assoc()) {
                            $i++;
                        ?>
                        
                        <tr class="odd gradeX" style="width: 100%;">
                            <td class="text-center"><?php echo $i; ?></td>
                            <td class="center"><?php echo $row['title']; ?></td>
                            <td class="text-center"><?php echo $row['dated'];; ?></td>
                            <td class="text-center">
                                <a href="view-pdf.php?fid=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"
                                    target="_blank">View File</a>

                            </td>
                        </tr>
                        <?php	} }?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<!-- Courses End -->

<style>
.cusTrade {}
</style>