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

<script>
    tinymce.init({selector:'textarea'});

    $(document).ready(function() {
    // set jumlah produk per halaman
    var produkPerHalaman = 4;
    
    // memuat produk pertama kali
    loadProduk(1, produkPerHalaman);
    setInterval(loadProduk(1, produkPerHalaman), 10000);

    // fungsi untuk memuat produk menggunakan Ajax
    function loadProduk(halaman, produkPerHalaman) {
        $.ajax({
        url: '<?php echo base_url('barang/data_barang')?>',
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
            paginationHtml += '<li class="page-item"><button class="page-link pagination-button prev" data-halaman="' + halamanSebelumnya + '">Previous</button></li>';
            // paginationHtml += '<button class="pagination-button prev" data-halaman="' + halamanSebelumnya + '">&laquo; Previous</button>';
        }
        for (var i = rangeAwal; i <= rangeAkhir; i++) {
            paginationHtml += '<li class="page-item' + ((i == halaman) ? ' active' : '') + '"><button class="page-link pagination-button" data-halaman="' + i + '">' + i + '</button></li>';
            // paginationHtml += '<button class="pagination-button' + ((i == halaman) ? ' active' : '') + '" data-halaman="' + i + '">' + i + '</button>';
        }
        if (halaman < jumlahHalaman) {
            paginationHtml += '<li class="page-item"><button class="page-link pagination-button next" data-halaman="' + halamanBerikutnya + '">Next</button></li>';
        }
        $('#pagination-container').html(paginationHtml);

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
            $.each(data.slice(indexMulai, indexAkhir), function(index, produk) {
                produkHtml += '<div class="col">';
                    produkHtml += '<div class="card" style="width: 18rem;">';
                        produkHtml += '<img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/8/25/e2122064-7fef-4c95-a153-8049c48a52ab.jpg" class="card-img-top img-fluid">';
                        produkHtml += '<div class="card-body">';
                            produkHtml += '<h5 class="card-title">'+ produk.kode_produk +'</h5>';
                            produkHtml += '<p class="card-text">' + produk.nama_produk + '</p>';
                            produkHtml += '<p class="card-text">' + produk.informasi_produk + '</p>';
                            produkHtml += '<a href="#" class="btn btn-primary">Go somewhere</a>';
                        produkHtml += '</div>';
                    produkHtml += '</div>';
                produkHtml += '</div>';

            });
            $('#produk').html(produkHtml);
        }
        });
    }
    $('#btn_simpan').on('click',function(){
            var kobar=$('#kode_barang').val();
            var nabar=$('#nama_barang').val();
            var harga=$('#harga').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/simpan_barang')?>",
                dataType : "JSON",
                data : {kobar:kobar , nabar:nabar, harga:harga},
                success: function(data){
                    $('[name="kobar"]').val("");
                    $('[name="nabar"]').val("");
                    $('[name="harga"]').val("");
                    $('#ModalaAdd').modal('hide');
                    // loadProduk(1, produkPerHalaman);
                    // card();
                }
            });
            return false;
        });
    });
</script>


