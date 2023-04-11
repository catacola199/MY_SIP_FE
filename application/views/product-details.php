<?php $this->load->view('_component/head') ?>
   <!-- breadcrumb area start -->
   <section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative"
      data-background="assets/img/breadcrum/coba.jpg">
      <div class="ac-about-shape-img z-index-1">
         <img src="assets/img/breadcrum/ab-shape-1.1.jpg" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__content p-relative z-index-1">
                  <h3 class="breadcrumb__title" name="title_produk">Product Details</h3>
                     <a href="#show" class="tp-btn-white-border">Show Detail Product <i class="far fa-arrow-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb area end -->
   <!--product-details-area-start -->
   <div class="tp-product-details-area tp-product-background pt-130" id="show">
      <div class="container">
         <div class="row align-items-center justify-content-center">
            <div class="col-xl-5 col-lg-6 col-12">
               <div class="tp-product-img">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                     </div>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="" name="thumbnail_1" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                           <img src="" name="thumbnail_2" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                           <img src="" name="thumbnail_3" class="d-block w-100" alt="...">
                        </div>
                     </div>
                     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                     </button>
                     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                     </button>
                  </div>
               </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-12">
               <div class="productdetails">
                  <div class="productdetails__content">
                     <span name="kategori_produk" class="badge text-bg-light mb-2"></span>
                     <h1 class="text-title text-white" name="nama_produk"></h1>
                     <p name="tagline_produk" class="text-secondary fst-italic"></p>
                  </div>
                  <div class="productdetails__ratting">
                     <h5 class="text-title text-white" name="info_produk"></h5>
                  </div>
                  <div class="productdetails__button mt-30">
                     <button class="tp-btn-sm-sky d-flex align-items-center">
                        <i class='bx bxl-whatsapp' style="font-size:1.5rem; margin-right:.5rem"></i> Chat Now
                     </button>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="productdetails-tabs">
               <div class="row justify-content-center">
                  <div class="col-xl-10 col-lg-12 col-12">
                     <div class="product-additional-tab">
                        <div class="pro-details-nav mb-40">
                           <ul class="nav nav-tabs pro-details-nav-btn" id="myTabs" role="tablist">
                              <li class="nav-item" role="presentation">
                                 <button class="nav-links active" id="home-tab-1" data-bs-toggle="tab" data-bs-target="#home-1" type="button" role="tab" aria-controls="home-1" aria-selected="true"><span>Prodcut Details</span></button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-links" id="information-tab" data-bs-toggle="tab" data-bs-target="#additional-information" type="button" role="tab" aria-controls="additional-information" aria-selected="false"><span>Additional Info</span></button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-links" id="size-chart-tab" data-bs-toggle="tab" data-bs-target="#chart" type="button" role="tab" aria-controls="chart" aria-selected="false"><span>Faq</span></button>
                              </li>
                           </ul>
                        </div>
                        <div class="tab-content tp-content-tab" id="myTabContent-2">
                           <div class="tab-para tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab-1">
                              <p class="mb-30" name="deskripsi"></p>
                           </div>
                           <div class="tab-pane fade" id="additional-information" role="tabpanel"aria-labelledby="information-tab">
                              <div class="product__details-info table-responsive">
                                 <img src="assets/img/product/b.png" alt="">
                              </div>
                           </div>
                           <div class="tab-pane fade" id="chart" role="tabpanel" aria-labelledby="size-chart-tab">
                              <?php $this->load->view('_component/faq') ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- product-details-area-end -->


   <!-- product-slider-area-end -->
   <div class="tp-product-slider tp-productend-background pb-100">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-10">
               <div class="tp-product-slider-title">
                  <h3 class="tp-product-slider-title pb-45">Realated Product</h3>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-xl-10">
               <div class="tp-product-price-slider">
                  <div class="swiper-container produk-terkait" >
                     <div class="swiper-wrapper">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- product-slider-area-end -->

<?php $this->load->view('_component/footer') ?>
