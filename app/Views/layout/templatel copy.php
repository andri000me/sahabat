<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sahabat</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/css/datepicker.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/breadcumb.css">

    <!-- mdb -->
    <link href="<?= base_url() ?>/mdb/pro/css/mdb.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/mdb/pro/css/style.css" rel="stylesheet">

    <!-- datatables -->
    <link href="<?= base_url() ?>/mdb/pro/css/addons/datatables.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/mdb/pro/css/addons/datatables-select.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/mdb/pro/css/addons/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<style>
    body {
        margin: 0;
        background: linear-gradient(45deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url("../assets/img/bg.jpg") center top no-repeat;
        background-size: contain;
    }
</style>

<body class="">
    <?= $this->include("layout/navbarl") ?>

    <div class="">
        <?= $this->renderSection('content'); ?>
    </div>


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>SAHABAT</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
          -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#intro" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/superfish/superfish.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/hoverIntent/hoverIntent.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/assets/js/mainl.js"></script>

    <!-- date picker -->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/js/datepicker.js"></script>

    <!-- mdb -->
    <script type="text/javascript" src="<?= base_url() ?>/mdb/pro/js/mdb.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/mdb/pro/js/popper.min.js"></script>

    <!-- datatables -->
    <script type="text/javascript" src="<?= base_url() ?>/mdb/pro/js/addons/datatables.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?= base_url() ?>/mdb/pro/js/addons/datatables-select.min.js" type="text/javascript"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
</body>

</html>

<script>
    document.getElementById("s1").onchange = function() {
        document.getElementById("s1form").submit();
    }
</script>
<script>
    document.getElementById("s2").onchange = function() {
        document.getElementById("s2form").submit();
    }
</script>
<script>
    document.getElementById("s3").onchange = function() {
        document.getElementById("s3form").submit();
    }
</script>
<script>
    document.getElementById("s4").onchange = function() {
        document.getElementById("s4form").submit();
    }
</script>
<script>
    document.getElementById("s5").onchange = function() {
        document.getElementById("s5form").submit();
    }
</script>
<script>
    document.getElementById("s6").onchange = function() {
        document.getElementById("s6form").submit();
    }
</script>


<!-- Preview image -->
<script type="text/javascript">
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>

<script type="text/javascript">
    $('.datepicker').pickadate({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'You selecte!d: dddd, dd mmmm, yyyy',
        formatSubmit: 'yyyy-mm-dd',
        hiddenSuffix: '_submit'
    })
</script>

<script type="text/javascript">
    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });
</script>

<script type="text/javascript">
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    $(document).ready(function() {
        $('.datepicker').pickadate();
        $('.datepicker').removeAttr('readonly');
    });
</script>

<script type="text/javascript">
    // Tooltips Initialization
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<script type="text/javascript">
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    $(document).ready(function() {
        $('.datepicker').pickadate();
        $('.datepicker').removeAttr('readonly');
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.stepper').mdbStepper();
    })

    function someFunction21() {
        setTimeout(function() {
            $('#horizontal-stepper').nextStep();
        }, 2000);
    }
</script>

<script type="text/javascript">
    // Material Design example
    $(document).ready(function() {
        $('#dtMaterialDesignExample').DataTable();
        $('#dtMaterialDesignExample_wrapper').find('label').each(function() {
            $(this).parent().append($(this).children());
        });
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function() {
            const $this = $(this);
            $this.attr("placeholder", "Search");
            $this.removeClass('form-control-sm');
        });
        $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
        $('#dtMaterialDesignExample_wrapper select').removeClass(
            'custom-select custom-select-sm form-control form-control-sm');
        $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
        $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
        $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
    });
</script>



<script>
    $('#modalDetail').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var trayek = button.data('trayek');
        var nama_pemilik = button.data('nama');
        var asal = button.data('asal');
        var tujuan = button.data('tujuan');
        var nomor = button.data('nomor');
        var kir = button.data('kir');
        var tahun = button.data('tahun');
        var merk = button.data('merk');
        var chasis = button.data('chasis');
        var mesin = button.data('mesin');
        var pkb = button.data('pkb');
        var surat = button.data('surat');
        var ktp = button.data('ktp');
        var stnkb = button.data('stnkb');
        var jasa = button.data('jasa');
        var imgkir = button.data('imgkir');

        var modal = $(this);

        $('#trayek').val(trayek);
        $('#nama_pemilik').val(nama_pemilik);
        $('#asal').val(asal);
        $('#tujuan').val(tujuan);
        $('#nomor').val(nomor);
        $('#tahun').val(tahun);
        $('#kir').val(kir);
        $('#merk').val(merk);
        $('#chasis').val(chasis);
        $('#mesin').val(mesin);
        $('#pkb').val(pkb);
        $('#surat').attr("href", "/img/img_surat_permohonan_koperasi/" + surat);
        $('#ktp').attr("href", "/img/img_ktp_pemilik/" + ktp);
        $('#stnkb').attr("href", "/img/img_stnkb_pkb/" + stnkb);
        $('#jasa').attr("href", "/img/img_jasa_raharja/" + jasa);
        $('#imgkir').attr("href", "/img/img_kir/" + imgkir);
    })
</script>