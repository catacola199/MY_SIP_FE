<script src="<?= base_url("assets/js/jquery.js") ?>"></script>
<script src="<?= base_url("assets/js/waypoints.js") ?>"></script>
<script src="<?= base_url("assets/js/bootstrap.bundle.min.js") ?>"></script>
<script src="<?= base_url("assets/js/swiper-bundle.js") ?>"></script>
<script src="<?= base_url("assets/js/slick.js") ?>"></script>
<script src="<?= base_url("assets/js/magnific-popup.js") ?>"></script>
<script src="<?= base_url("assets/js/counterup.js") ?>"></script>
<script src="<?= base_url("assets/js/wow.js") ?>"></script>
<script src="<?= base_url("assets/js/meanmenu.js") ?>"></script>
<script src="<?= base_url("assets/js/isotope-pkgd.js") ?>"></script>
<script src="<?= base_url("assets/js/imagesloaded-pkgd.js") ?>"></script>
<!-- <script src="<?= base_url("assets/js/ajax-form.js") ?>"></script> -->
<script src="<?= base_url("assets/js/main.js") ?>"></script>
<script src="<?= base_url("assets/tinymce/tinymce.min.js") ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
<!-- <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        // set jumlah produk per halaman
        var produkPerHalaman = 12;
        // memuat produk pertama kali
        loadProduk(1, produkPerHalaman);

        function loadProduk(halaman, produkPerHalaman) {
            $.ajax({
                url: '<?php echo base_url() ?>barang/filterProduk',
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
                        paginationHtml += '<li style="cursor: pointer;"><a href="#more" class="page-link pagination-button prev" data-halaman="' + halamanSebelumnya + '"><i class="far fa-angle-left"></i></a></li>';
                    }
                    for (var i = rangeAwal; i <= rangeAkhir; i++) {
                        // paginationHtml += '<li class="page-item' + ((i == halaman) ? ' active' : '') + '"><button class="page-link pagination-button" data-halaman="' + i + '">' + i + '</button></li>';
                        paginationHtml += '<li style="cursor: pointer;"><a href="#more" class="page-link pagination-button' + ((i == halaman) ? ' current disabled' : '') + '" data-halaman="' + i + '">' + i + '</a></li>';
                    }
                    if (halaman < jumlahHalaman) {
                        paginationHtml += '<li style="cursor: pointer;"><a href="#more" class="page-link pagination-button next" data-halaman="' + halamanBerikutnya + '"><i class="far fa-angle-right"></i></a></li>';
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
                        produkHtml += '<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".6s" data-wow-delay="' + anim + 's">';
                        produkHtml += '<div class="tpproduct text-center mb-30">';
                        produkHtml += '<div class="tpproduct__img">';
                        produkHtml += '<img class="img-fluid" src="' + produk.gambar_produk + '" alt="' + produk.nama_produk + '">';
                        produkHtml += '<div class="tp-product-icon">';
                        produkHtml += '<a href="productd?id=' + produk.id_detailproduk + '"><i class="fal fa-search"></i></a>';
                        produkHtml += '</div>';
                        produkHtml += '</div>';
                        produkHtml += '<div class="tpproduct__meta">';
                        produkHtml += '<a href="productd?id=' + produk.id_detailproduk + '" class="tp-product-title">' + produk.nama_produk + '</a>';
                        produkHtml += '<p class="text-truncate card-text">' + produk.jenis_kode_produk +" : "+ produk.kode_produk + '</p>';
                        produkHtml += '<a href="productd?id=' + produk.id_detailproduk + '"class="tp-btn-detail">Lihat Detail <i class="far fa-arrow-right"></i></a>';
                        produkHtml += '</div>';
                        produkHtml += '</div>';
                        produkHtml += '</div>';
                        anim += .1;
                    });
                    $('#produk').html(produkHtml);
                }
            });
        }
        $('#filter').change(function(){
            var filter = $('#filter').val();
            loadProduk(1, produkPerHalaman);
            function loadProduk(halaman, produkPerHalaman) {

                // alert(filter);
                $.ajax({
                    url: '<?php echo base_url() ?>barang/filterProduk',
                    dataType: 'json',
                    type:'GET',
                    data: {filter:filter},
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
                            paginationHtml += '<li style="cursor: pointer;"><a href="#more" class="page-link pagination-button prev" data-halaman="' + halamanSebelumnya + '"><i class="far fa-angle-left"></i></a></li>';
                        }
                        for (var i = rangeAwal; i <= rangeAkhir; i++) {
                            // paginationHtml += '<li class="page-item' + ((i == halaman) ? ' active' : '') + '"><button class="page-link pagination-button" data-halaman="' + i + '">' + i + '</button></li>';
                            paginationHtml += '<li style="cursor: pointer;"><a href="#more" class="page-link pagination-button' + ((i == halaman) ? ' current disabled' : '') + '" data-halaman="' + i + '">' + i + '</a></li>';
                        }
                        if (halaman < jumlahHalaman) {
                            paginationHtml += '<li style="cursor: pointer;"><a href="#more" class="page-link pagination-button next" data-halaman="' + halamanBerikutnya + '"><i class="far fa-angle-right"></i></a></li>';
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
                            produkHtml += '<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow tpfadeUp" data-wow-duration=".6s" data-wow-delay="' + anim + 's">';
                            produkHtml += '<div class="tpproduct text-center mb-30">';
                            produkHtml += '<div class="tpproduct__img">';
                            produkHtml += '<img class="img-fluid" src="' + produk.gambar_produk + '" alt="' + produk.nama_produk + '">';
                            produkHtml += '<div class="tp-product-icon">';
                            produkHtml += '<a href="productd?id=' + produk.id_detailproduk + '"><i class="fal fa-search"></i></a>';
                            produkHtml += '</div>';
                            produkHtml += '</div>';
                            produkHtml += '<div class="tpproduct__meta">';
                            produkHtml += '<a href="productd?id=' + produk.id_detailproduk + '" class="tp-product-title">' + produk.nama_produk + '</a>';
                            produkHtml += '<p class="text-truncate card-text">' + produk.jenis_kode_produk +" : "+ produk.kode_produk + '</p>';
                            produkHtml += '<a href="productd?id=' + produk.id_detailproduk + '"class="tp-btn-detail">Lihat Detail <i class="far fa-arrow-right"></i></a>';
                            produkHtml += '</div>';
                            produkHtml += '</div>';
                            produkHtml += '</div>';
                            anim += .1;
                        });
                        $('#produk').html(produkHtml);
                    }
                });
            }
        });
    });

    // detail produk
    $(document).ready(function() {
        $.ajax({
            url: "<?php echo base_url('front/details') ?>/<?= $this->input->get('id') ?>",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                var kata = "Hai, Saya ingin menanyakan tentang "+data.nama_produk+" ini";
                var link = "https://api.whatsapp.com/send?phone=+6281213561966&text="<?= rawurldecode('')?>+kata;
                var kode =data.jenis_kode_produk+" : "+data.kode_produk;
                $('[name="thumbnail_1"]').attr('src',data.gambar1_produk);
                $('[name="tagline_produk"]').text(data.tagline_produk).val();
                $('[name="title_produk"]').text(data.nama_produk).val();
                $('[name="kode_produk"]').text(kode).val();
                $('[name="nama_produk"]').text(data.nama_produk).val();
                $('[name="kategori_produk"]').text(data.kategori_produk).val();
                $('[name="info_produk"]').attr('src',data.informasi_produk);
                $('[id="additional-information"]').html(data.feature_produk);
                $('[name="chat_now"]').attr('href',link);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Error get data from ajax');
            }
        });
    });

    // Produk terkait
    var produk_terkait = new Swiper('.produk-terkait', {
        // Optional parameters

        loop: true,
        slidesPerView: 3,
        spaceBetween: 30,
        // Navigation arrows
        preloadImages: false,
        lazy: {
            loadPrevNext: true,
            loadOnTransitionStart: true
        },
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        breakpoints: {
            '1200': {
                slidesPerView: 3,
            },
            '992': {
                slidesPerView: 3,
            },
            '768': {
                slidesPerView: 2,
            },
            '576': {
                slidesPerView: 1,
            },
            '0': {
                slidesPerView: 1,
            },
        },

    });

    $(document).ready(function() {
        $.ajax({
            url: "<?php echo base_url('barang/produk_terkait') ?>",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                var terkait = '';
                $.each(data, function(index, produk) {
                    terkait += '<div class="swiper-slide">';
                    terkait += '<div class="tpproduct text-center mb-30">';
                    terkait += '<div class="tpproduct__img">';
                    terkait += '<img class="w-100" src="'+produk.gambar_produk+'"alt="'+produk.nama_produk+'">';
                    terkait += '<div class="tp-product-icon">';
                    terkait += '<a href="productd?id=' + produk.id_detailproduk + '"><i class="fal fa-search"></i></a>';
                    terkait += '</div>';
                    terkait += '</div>';
                    terkait += '<div class="tpproduct__meta">';
                    terkait += '<a href="productd?id=' + produk.id_detailproduk + '" class="tp-product-details-title">' + produk.nama_produk + '</a>';
                    terkait += '<p class="text-truncate card-text">' + produk.jenis_kode_produk +" : "+ produk.kode_produk +'</p>';
                    terkait += '</div>';
                    terkait += '</div>';
                    terkait += '</div>';
                });
                produk_terkait.appendSlide(terkait);
                produk_terkait.update();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Error get data from ajax');
            }
        });
    });

    $('#kirim').submit(function(e){
        let timerInterval;
        e.preventDefault();
        var nama    =   $('#name').val();
        var email    =   $('#email').val();
        var message    =   $('#message').val();
        console.log(nama,email,message);
        var form = $('#kirim').serialize();
        $.ajax({
            url: '<?php echo base_url('barang/kontak_pengguna'); ?>',
            type: 'POST',
            cache	: false,
            data: form,
            success: function(data){
                $('#kirim')[0].reset();
                swal.fire({
                imageUrl: '<?= base_url()?>/assets/img/loading.gif',
                title: "Sending Mail",
                text: "Please wait",
                showConfirmButton: false,
                allowOutsideClick: false,
                timer: 1500,
                timerProgressBar: true,
                }).then((result) => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        html: 'Message has been delivered! <br><br>',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    });
                });
            }
        });
    });
    $('#formFooter').submit(function(e){
        e.preventDefault();
        var form = $('#formFooter').serialize();
        $.ajax({
            url: '<?php echo base_url('barang/kontak_pengguna'); ?>',
            type: 'POST',
            cache	: false,
            data: form,
            success: function(data){
                $('#formFooter')[0].reset();
                swal.fire({
                imageUrl: '<?= base_url()?>/assets/img/loading.gif',
                title: "Sending Mail",
                text: "Please wait",
                showConfirmButton: false,
                allowOutsideClick: false,
                timer: 1500,
                timerProgressBar: true,
                }).then((result) => {
                    swal.fire({
                    icon: 'success',
                    title: "Thank You!",
                    html: 'Thank you for subscribe newsletter Sri Intan Perkasa<br>Get latest updates and deals<br>',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    timer: 2500,
                    timerProgressBar: true,
                    });
                });
                
            }
        });
    });

    $('#formIndex').submit(function(e){
        e.preventDefault();
        var form = $('#formIndex').serialize();
        $.ajax({
            url: '<?php echo base_url('barang/kontak_pengguna'); ?>',
            type: 'POST',
            cache	: false,
            data: form,
            success: function(data){
                $('#formIndex')[0].reset();
                swal.fire({
                imageUrl: '<?= base_url()?>/assets/img/loading.gif',
                title: "Sending Mail",
                text: "Please wait",
                showConfirmButton: false,
                allowOutsideClick: false,
                timer: 1500,
                timerProgressBar: true,
                }).then((result) => {
                    swal.fire({
                    icon: 'success',
                    title: "Thank You!",
                    html: 'Thank you for subscribe newsletter Sri Intan Perkasa<br>Get latest updates and deals<br>',
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    timer: 2500,
                    timerProgressBar: true,
                    });
                });
                
            }
        });
    });

    // $('#formOffCanvas').submit(function(e){
    //     e.preventDefault();
    //     var form = $('#formOffCanvas').serialize();
    //     $.ajax({
    //         url: '<?php echo base_url('barang/kontak_pengguna'); ?>',
    //         type: 'POST',
    //         cache	: false,
    //         data: form,
    //         success: function(data){
    //             $('#formOffCanvas')[0].reset();
    //             swal.fire({
    //             imageUrl: '<?= base_url()?>/assets/img/loading.gif',
    //             title: "Sending Mail",
    //             text: "Please wait",
    //             showConfirmButton: false,
    //             allowOutsideClick: false,
    //             timer: 1500,
    //             timerProgressBar: true,
    //             }).then((result) => {
    //                 swal.fire({
    //                 icon: 'success',
    //                 title: "Thank You!",
    //                 html: 'Thank you for subscribe newsletter Sri Intan Perkasa<br>Get latest updates and deals<br>',
    //                 showConfirmButton: false,
    //                 allowOutsideClick: false,
    //                 timer: 2500,
    //                 timerProgressBar: true,
    //                 });
    //             });
                
    //         }
    //     });
    // });
</script>