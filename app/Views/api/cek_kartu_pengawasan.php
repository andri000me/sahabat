<?= $this->extend('layout/template_public') ?>
<?= $this->section('content'); ?>

<div class="container-fluid mt-t" style="margin-bottom:500px;">
    <div class="px-5 py-5">

        <div class="row animated zoomIn">
            <div class="col text-center">
                <img src="/assets/img/logos.png" alt="" width="7%" class="mb-3">
                <h2 class="text-uppercase text-dark font-weight-bold card-title">CEK KARTU PENGAWASAN</h2>
                <p class="card-text text-uppercase">CEK KARTU PENGAWASAN Dinas Perhubungan Provinsi Gorontalo</p>
            </div>
        </div>

        <div class="cards py-4 px-4 mt-4 color-a">
            <div class=" content-box box-default">
                <div class="row">
                    <div class="input-group md-form form-sm form-2 px-3">
                        <input id="nopol" class="form-control my-0 py-1 lime-border" type="text" placeholder="Nomor Plat Kendaraan" aria-label="Search">
                        <div class="input-group-append">
                            <span type="button" onclick="cekNopol()" class="input-group-text cyan lighten-2" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i>Cek</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="table-responsive animated zoomIn">
                <table id="" class="table table-bordered" cellspacing="0" width="100%">
                    <thead class="cyan white-text">
                        <tr>
                            <th class="th-sm">Nama</th>
                            <th class="th-sm">Nama Perushaan</th>
                            <th class="th-sm">Plat Nomor</th>
                            <th class="th-sm">Masa Berlaku STNK s/d</th>
                            <th class="th-sm">Masa Berlaku Kartu Pengawasan s/d</th>
                        </tr>
                    </thead>
                    <tbody id="result">

                    </tbody>
                </table>
            </div>

            <br>
        </div>
    </div>
</div>

<script>
    function cekNopol() {
        nopol = $("#nopol").val();
        result = $("#result");
        loading = $("#loading");

        username = "sigit";
        password = "admin";

        if (nopol == "") {
            alert("Anda belum mengisi nomor plat kendaraan pada inputan !");
        } else {
            $("#loading").html("<center><span class='label label-info'>Sedang Mencari...</span></center>");
            $.ajax({
                type: 'POST',
                url: 'https://sipeka-dishub.gorontaloprov.go.id/api/cekDataKartuPengawasan',
                data: {
                    no_pol: nopol
                },
                cache: false,
                success: function(data) {
                    result.html(data);
                    loading.hide();
                    console.log(data);
                }
            });
        }

    }
</script>

<?= $this->endSection(); ?>