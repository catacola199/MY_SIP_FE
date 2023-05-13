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
                  <h3 class="breadcrumb__title">Contact</h3>
                  <a href="#contact-body" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb area end -->


   <!--contact-area-start -->
      <div class="tp-contact-area pt-135 pb-130" id="contact-body">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 ">
                  <div class="tp-contct-wrapper contact-space-40">
                     <div class="tp-contact-thumb mb-60">
                        <img src="assets/img/contact/3.png" alt="">
                     </div>
                    
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="tpcontact">
                     <h4 class="tp-contact-big-title">Let’s Talk...</h4>
                     <div class="tpcontact__form tpcontact__form-3">
                        <form id="kirim">  
                           <input id="name" name="name" type="text" placeholder="Enter your Name" required autocomplete="off">
                           <input id="email" name="email" type="email" placeholder="Enter your Mail" required autocomplete="off">
                           <textarea id="message" name="message" placeholder="Enter your Massage" required autocomplete="off"></textarea>
                           <button type="submit" class="tp-btn-yellow">Send Massage</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact-area-end -->
</main>
<?php $this->load->view('_component/footer') ?>