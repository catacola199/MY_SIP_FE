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
                  <a href="contact" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb area end -->


   <!--contact-area-start -->
   <!--<?= form_open('front/send_email') ?>
   <div class="tp-contact-area pt-135 pb-130">
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
                     <form id="contact-form" action="assets/mail.php">
                        <input name="name" type="text" placeholder="Enter your Name">
                        <input name="email" id="email" type="email" placeholder="Enter your Mail">
                        <textarea name="message" placeholder="Enter your Massage"></textarea>
                     </form>
                     <button type="submit" class="tp-btn-yellow">Send Massage</button>
                  </div>
                  <p class="ajax-response"></p>
               </div>
            </div>
         </div>
      </div>
   </div>-->
   <!-- contact-area-end -->

   <?= form_close() ?>
   <section id="contact" class="contact mt-20 mb-20">
      <div class="container" data-aos="fade-up">

        

         <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch ">
               <div class="info">
                  <div class="address">
                     <i class="tpchosebox__icon" href="assets/img/svg/map.svg"></i>
                     <h4>Location:</h4>
                     <p>Ruko Grand Boulevard Blok U6/12 - Harapan Indah - Bekasi Barat, Medan Satria 17131</p>
                  </div>

                  <div class="email">
                     <i class="bi bi-envelope"></i>
                     <h4>Email:</h4>
                     <p>marketingsip@sriintanperkasa.com</p>
                  </div>

                  <div class="phone">
                     <i class="bi bi-phone"></i>
                     <h4>Call:</h4>
                     <p>(021) 887 3435 / (021) 887 3691</p>
                  </div>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.832002238298!2d106.975554!3d-6.16984!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdda6fb956e329d0f!2sX-Ray%20Alkes%20Ukes%20%7C%20Alat%20Kesehatan%20Radiologi%20-%20Uji%20Kesesuaian%20dan%20Kalibrasi%20%40%20PT.%20SRI%20INTAN%20PERKASA!5e0!3m2!1sen!2sid!4v1649660360337!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
               </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
               <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                     <div class="form-group col-md-6">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="name">Your Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="name">Subject</label>
                     <input type="text" class="form-control" name="subject" id="subject" required>
                  </div>
                  <div class="form-group">
                     <label for="name">Message</label>
                     <textarea class="form-control" name="message" rows="10" required></textarea>
                  </div>
                  <div class="my-3">
                     <div class="loading">Loading</div>
                     <div class="error-message"></div>
                     <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
               </form>
            </div>

         </div>

      </div>
   </section><!-- End Contact Section -->
</main>

<?php $this->load->view('_component/footer') ?>