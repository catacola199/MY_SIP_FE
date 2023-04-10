<?php $this->load->view('_component/head') ?>
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
         <div class="card text-center">
            <div class="card-body">
               <img class="img-fluid" src="<?php base_url('assets/img/product_notfound.png')?>" alt="...">
               <h5 class="card-title">Product Not Found</h5>
            </div>
         </div>
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
<?php $this->load->view('_component/footer') ?>