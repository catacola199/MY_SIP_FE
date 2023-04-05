<?php $this->load->view('_component/head') ?>
<?php $this->load->view('_component/header') ?>
<?php $this->load->view('_component/_btn-top-bar') ?>

   <main>

      <!-- breadcrumb area start -->
      <section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative" 
      data-background="assets/img/breadcrum/12.jpg">
         <div class="ac-about-shape-img ">
            <img src="assets/img/breadcrum/icon.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content p-relative z-index-1">
                     <h3 class="breadcrumb__title">Product</h3>
                     <a href="#more" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb area end -->

      <!-- product-area-start -->
      <div class="tp-product-area pt-130 pb-130" id="more">
         <div class="container">
            <div class="row" id="produk">
            </div>
         </div>
         <div class="row">
               <div class="container">
                  <div class="col-xl-12">
                     <div class="basic-pagination mt-30 text-center">
                        <nav>
                           <ul id="pagination">
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
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