       <!-- Footer Start -->
       <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
           <div class="container py-5">
               <div class="row g-5">
                   <div class="col-lg-3 col-md-6">
                       <h4 class="text-white mb-3">Quick Link</h4>
                       <a class="btn btn-link" href="about.php">About Us</a>
                       <a class="btn btn-link" href="contact.php">Contact Us</a>
                       <a class="btn btn-link" href="privacy.php">Privacy Policy</a>
                       <a class="btn btn-link" href="tnc.php">Terms & Condition</a>
                       <a class="btn btn-link" href="faqs.php">FAQs & Help</a>
                   </div>
                   <div class="col-lg-3 col-md-6">
                       <h4 class="text-white mb-3">Contact</h4>
                       <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Kaliganj, Lalmonirhat, Bangladesh</p>
                       <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+XX XX XXXXXX</p>
                       <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@kaliganjtsc.gov.bd</p>
                       <div class="d-flex pt-2">
                           <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                           <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                           <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                           <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6">
                       <h4 class="text-white mb-3">Gallery</h4>
                       <div class="row g-2 pt-2">
                           <?php								
                            $getFg = $additional->getFooterGallary();
                            if($getFg){
                                $i = 0; 
                            while ($row = $getFg->fetch_assoc()) {
                                $i++;
                            ?>
                           <div class="col-4">
                               <img class="img-fluid bg-light p-1" src="files/gallary/<?php echo $row['photo_name']; ?>" alt="<?php echo $row['photo_name']; ?>">
                           </div>
                           <?php }} ?>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6">
                       <h4 class="text-white mb-3">Newsletter</h4>
                       <p>Quick sign up Here for latest news of our Institute..</p>
                       <div class="position-relative mx-auto" style="max-width: 400px;">
                           <form method="POST">
                               <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                                   placeholder="Your email">
                               <button type="button"
                                   class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
           <div class="container">
               <div class="copyright">
                   <div class="row">
                       <div class="col-md-8 text-center text-md-start mb-3 mb-md-0"> Copyright <?php echo date("Y");?>
                           &copy; <a class="border-bottom" href="#">Kaliganj TSC</a> All Right Reserved.
                           <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                           Version - 2.1.1 | Developed By <a class="border-bottom"
                               href="https://www.facebook.com/manikroytagor.1/" target="_blank">Manik Roy Tagor</a>
                       </div>
                       <div class="col-md-4 text-center text-md-end">
                           <div class="footer-menu">
                               <a href="index.php">Home</a>
                               <a href="trade.php">Trade</a>
                               <a href="team.php">Team</a>
                               <a href="about.php">About</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Footer End -->


       <!-- Back to Top -->
       <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


       <!-- JavaScript Libraries -->
       <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
       <script src="library/wow/wow.min.js"></script>
       <script src="library/easing/easing.min.js"></script>
       <script src="library/waypoints/waypoints.min.js"></script>
       <script src="library/owlcarousel/owl.carousel.min.js"></script>

       <!-- Template Javascript -->
       <script src="js/main.js"></script>
       </body>

       </html>