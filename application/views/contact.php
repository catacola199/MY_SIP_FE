<?php $this->load->view('_component/head') ?>
<?php $this->load->view('_component/header') ?>
<?php $this->load->view('_component/_btn-top-bar') ?>

<main>

   <!-- breadcrumb area start -->
   <section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative" data-background="assets/img/breadcrum/coba.jpg">
      <div class="ac-about-shape-img z-index-1">
         <img src="assets/img/breadcrum/ab-shape-1.1.jpg" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__content p-relative z-index-1">
                  <h3 class="breadcrumb__title">About Collax</h3>
                  <a href="contact.html" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb area end -->


   <!--contact-area-start -->
   <div class="tp-contact-area pt-135 pb-130">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6 ">
               <div class="tp-contct-wrapper contact-space-40">
                  <div class="tp-contact-thumb mb-60">
                     <img src="assets/img/contact/contact-1.jpg" alt="">
                  </div>
                  <div class="tp-contact-info mb-40">
                     <h4 class="contact-title">Mail Address</h4>
                     <span><a href="mailto:marketingsip@sriintanperkasa.com">marketingsip@sriintanperkasa.com</a></span>
                  </div>
                  <div class="tp-contact-info mb-40">
                     <h4 class="contact-title">Phone Number</h4>
                     <span><a href="tel:0218873435">+6221-887-3435</a></span>
                  </div>
                  <div class="tp-contact-info">
                     <h4 class="contact-title">Address line</h4>
                     <span><a href="https://goo.gl/maps/MaokrDUTCkq98zhb9" target="blank">Ruko Grand Cemara
                         Blok U6/12 - Harapan Indah - Bekasi Barat</a></span>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="tpcontact">
                  <h4 class="tp-contact-big-title">Let’s Talk...</h4>
                  <div class="tpcontact__form tpcontact__form-3">
                     <form id="contact-form" action="assets/mail.php">
                        <input name="name" type="text" placeholder="Enter your Name">
                        <input name="email" type="email" placeholder="Enter your Mail">
                        <textarea name="message" placeholder="Enter your Massage"></textarea>
                     </form>
                     <button type="submit" class="tp-btn-yellow">Send Massage</button>
                  </div>
                  <p class="ajax-response"></p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact-area-end -->

</main>

<?php $this->load->view('_component/footer') ?>