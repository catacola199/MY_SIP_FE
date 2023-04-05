<?php $this->load->view('_component/head') ?>
<?php $this->load->view('_component/header') ?>
<?php $this->load->view('_component/_btn-top-bar') ?>

   <main>

      <!-- breadcrumb area start -->
      <section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative" data-background="assets/img/breadcrum/ab-1.1.jpg">
         <div class="ac-about-shape-img z-index-1">
            <img src="assets/img/breadcrum/ab-shape-1.1.jpg" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title">Collax Product</h3>
                     <a href="contact.php" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->

      <!-- product-area-start -->
      <div class="tp-product-area pt-130 pb-130">
         <div class="container">
            <div class="row" id="produk">
               <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".3s" data-wow-delay=".6s">
                  <div class="tpproduct text-center mb-30">
                     <div class="tpproduct__img">
                        <img class="img-fluid" src="http://localhost/SIP_MY/upload/brosur/thumbnail/default.png" alt="">
                        <div class="tp-product-icon">
                           <a href="#"><i class="fal fa-shopping-basket"></i></a>
                           <a href="#"><i class="fal fa-heart"></i></a>
                        </div>
                     </div>
                     <div class="tpproduct__meta">
                        <h4 class="tp-product-title"><a href="product-details.php">Jeff Gothelf learn UX</a></h4>
                        <span>$46.00</span>
                        <div class="product-rating">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fal fa-star"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- <div class="row">
               <div class="container">
                  <div class="col-xl-12">
                     <div class="basic-pagination mt-30 text-center">
                        <nav>
                           <ul>
                              <li>
                                 <a href="blog.php">
                                    <i class="far fa-angle-left"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="blog.php">1</a>
                              </li>
                              <li>
                                 <span class="current">2</span>
                              </li>
                              <li>
                                 <a href="blog.php">3</a>
                              </li>
                              <li>
                                 <a href="blog.php">
                                    <i class="far fa-angle-right"></i>
                                 </a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
         <div id="page">
            <nav aria-label="...">
               <ul class="pagination mt-4 d-flex justify-content-center" id="pagination-container">         
               </ul>
            </nav>
         </div>
      </div>
      <!-- product-area-end -->

   </main>


   <!-- footer-area-start -->

   <footer>
      <div class="tp-footer-area black-bg pt-130 pb-30">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="tp-footer-widget">
                     <div class="tp-footer-widget__logo mb-30">
                        <a href="index.php"><img src="assets/img/logo/logo_kecil.png" alt=""></a>
                     </div>
                     <div class="tp-footer-widget__text mb-30">
                        <p>A new way to make the payments easy,
                           reliable and 100% secure. claritatem itamconse quat. Exerci tationulla</p>
                     </div>
                     <div class="tp-footer-widget__social-link">
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-skype"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-2 col-md-6 d-flex justify-content-lg-center">
                  <div class="tp-footer-widget">
                     <div class="tp-footer-widget__title pb-15">
                        <h3 class="footer-title">Usefull Links</h3>
                     </div>
                     <div class="tp-footer-widget__list">
                        <ul>
                           <li><a href="#">Contact us</a></li>
                           <li><a href="#">How it Works</a></li>
                           <li><a href="#">Create</a></li>
                           <li><a href="#">Explore</a></li>
                           <li><a href="#">Terms & Services</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-2 col-md-6">
                  <div class="tp-footer-widget pl-20">
                     <div class="tp-footer-widget__title pb-15">
                        <h3 class="footer-title">Community</h3>
                     </div>
                     <div class="tp-footer-widget__list">
                        <ul>
                           <li><a href="#">Help Center</a></li>
                           <li><a href="#">Partners</a></li>
                           <li><a href="#">Suggestions</a></li>
                           <li><a href="blog.php">Blog</a></li>
                           <li><a href="#">Newsletters</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="tp-footer-widget">
                     <div class="tp-footer-widget__title pb-15">
                        <h3 class="footer-title">Subscribe Newslatter</h3>
                     </div>
                     <div class="tp-footer-widget__text mb-55">
                        <p>Exerci tation ullamcorper suscipit lobortis nisl aliquip ex ea commodo</p>
                     </div>
                     <div class="tp-footer-widget__input">
                        <form action="#">
                           <input type="text" placeholder="Enter Mail">
                           <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="tp-copyright-area">
            <div class="container">
               <div class="copyright-border pt-40">
                  <div class="row">
                     <div class="col-xl-6 col-lg-6 col-12">
                        <div class="tp-copyright-left text-lg-start text-start text-md-center">
                           <p> © Copyright ©2022 Sri Intan Perkasa. All Rights Reserved Copyright</p>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-12">
                        <div class="tp-copyright-right text-start text-md-center text-lg-end">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>

   <!-- footer-area-end -->


   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="far fa-angle-double-up"></i>
   </button>

   <!-- JS here -->
   <?php $this->load->view('_component/jquery') ?>
</body>

</html>