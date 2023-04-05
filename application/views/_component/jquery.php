<script src="<?= base_url("assets/js/jquery.js")?>"></script>
<script src="<?= base_url("assets/js/waypoints.js")?>"></script>
<script src="<?= base_url("assets/js/bootstrap.bundle.min.js")?>"></script>
<script src="<?= base_url("assets/js/swiper-bundle.js")?>"></script>
<script src="<?= base_url("assets/js/slick.js")?>"></script>
<script src="<?= base_url("assets/js/magnific-popup.js")?>"></script>
<script src="<?= base_url("assets/js/counterup.js")?>"></script>
<script src="<?= base_url("assets/js/wow.js")?>"></script>
<script src="<?= base_url("assets/js/meanmenu.js")?>"></script>
<script src="<?= base_url("assets/js/isotope-pkgd.js")?>"></script>
<script src="<?= base_url("assets/js/imagesloaded-pkgd.js")?>"></script>
<script src="<?= base_url("assets/js/ajax-form.js")?>"></script>
<script src="<?= base_url("assets/js/main.js")?>"></script>
<script src="<?= base_url("assets/tinymce/tinymce.min.js")?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script>
    tinymce.init({selector:'textarea'});

    $(document).ready(function() {
    // set jumlah produk per halaman
    var produkPerHalaman = 8;
    
    // memuat produk pertama kali
    loadProduk(1, produkPerHalaman);
    // setInterval(loadProduk(1, produkPerHalaman), 10000);

    // fungsi untuk memuat produk menggunakan Ajax
    function loadProduk(halaman, produkPerHalaman) {
        $.ajax({
        url: '<?php echo base_url()?>/barang/data_barang',
        dataType: 'json',
        success: function(data) {
            // menghitung jumlah halaman
        var jumlahHalaman = Math.ceil(data.length / produkPerHalaman);
            
            // menentukan halaman sebelumnya dan berikutnya
        var halamanSebelumnya = (halaman > 1) ? halaman - 1 : 1;
        var halamanBerikutnya = (halaman < jumlahHalaman) ? halaman + 1 : jumlahHalaman;

        // menentukan range halaman yang akan ditampilkan
        var rangeAwal = Math.max(1, halaman - 1);
        var rangeAkhir = Math.min(jumlahHalaman, halaman + 1);
        if (rangeAkhir - rangeAwal < 2) {
            if (rangeAwal == 1) {
            rangeAkhir = Math.min(jumlahHalaman, rangeAwal + 2);
            } else {
            rangeAwal = Math.max(1, rangeAkhir - 2);
            }
        }

        // membuat tombol navigasi pagination
        var paginationHtml = '';
        if (halaman > 1) {
            paginationHtml += '<li style="cursor: pointer;"><a class="page-link pagination-button prev" data-halaman="' + halamanSebelumnya + '"><i class="far fa-angle-left"></i></a></li>';
        }
        for (var i = rangeAwal; i <= rangeAkhir; i++) {
            // paginationHtml += '<li class="page-item' + ((i == halaman) ? ' active' : '') + '"><button class="page-link pagination-button" data-halaman="' + i + '">' + i + '</button></li>';
            paginationHtml += '<li style="cursor: pointer;"><span class="page-link pagination-button' + ((i == halaman) ? ' current disabled' : '') + '" data-halaman="' + i + '">' + i + '</span></li>';
        }
        if (halaman < jumlahHalaman) {
            paginationHtml += '<li style="cursor: pointer;"><a class="page-link pagination-button next" data-halaman="' + halamanBerikutnya + '"><i class="far fa-angle-right"></i></a></li>';
            // paginationHtml += '<li class="page-item"><button class="page-link pagination-button next" data-halaman="' + halamanBerikutnya + '">Next</button></li>';
        }
        $('#pagination').html(paginationHtml);

        // menambahkan event click pada tombol navigasi pagination
        $('.pagination-button').click(function() {
            var halaman = $(this).data('halaman');
            loadProduk(halaman, produkPerHalaman);
        });
            // menghitung index produk yang akan ditampilkan
            var indexMulai = (halaman - 1) * produkPerHalaman;
            var indexAkhir = indexMulai + produkPerHalaman;
            
            // memuat produk yang sesuai dengan index
            var produkHtml = '';
            var anim = .4;
            $.each(data.slice(indexMulai, indexAkhir), function(index, produk) {
                produkHtml += '<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".6s" data-wow-delay="'+ anim +'s">';
                    produkHtml += '<div class="tpproduct text-center mb-30">';
                    produkHtml += '<div class="tpproduct__img">';
                        produkHtml += '<img class="img-fluid" src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/8/25/e2122064-7fef-4c95-a153-8049c48a52ab.jpg" alt="">';
                        produkHtml += '<div class="tp-product-icon">';
                            produkHtml += '<a href="productd"><i class="fal fa-search"></i></a>';
                        produkHtml += '</div>';
                    produkHtml += '</div>';
                    produkHtml += '<div class="tpproduct__meta">';
                        produkHtml += '<h4 class="tp-product-title"><a href="productd">' + produk.nama_produk + '</a></h4>';
                        produkHtml += '<span>$46.00</span>';
                        produkHtml += '<div class="product-rating">';
                            produkHtml += '<i class="fas fa-star"></i>';
                            produkHtml += '<i class="fas fa-star"></i>';
                            produkHtml += '<i class="fas fa-star"></i>';
                            produkHtml += '<i class="fas fa-star"></i>';
                            produkHtml += '<i class="fal fa-star"></i>';
                        produkHtml += '</div>';
                    produkHtml += '</div>';
                produkHtml += '</div>';
                produkHtml += '</div>';
                anim+=.1;
            });
            $('#produk').html(produkHtml);
        }
        });
    }
    });
</script>


