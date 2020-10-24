<?= $this->extend('layout/templatel') ?>
<?= $this->section('content'); ?>
<div class="container">
    <!-- <div class="judul pl-4 wow fadeInLeft"><i class="fa fa-file mr-2"></i> Data permohonan rekomendasi</div> -->

    <div class="row mb-5 row animated zoomIn">
        <div class="col-sm-12 mb-3 mb-md-0">
            <div class="cards px-4 pt-3">
                <div class="card-body">

                    <div class="">
                        <div class="col">
                            <h4 class="text-dark font-weight-bold card-title ml-1">Tambah User </h4>
                        </div>
                    </div>
                    <div class="mb-5 mt-0">

                        <!--Card content-->
                        <div class="card-body pt-0">

                            <!-- Form -->
                            <form class="text-left" style="color: #757575;" action="/Login/tambahUser">

                                <!-- E-mail -->
                                <div class="md-form mt-5">
                                    <input name="nama" type="text" id="materialRegisterFormEmail" class="form-control">
                                    <label for="materialRegisterFormEmail">Full name</label>
                                </div>

                                <!-- E-mail -->
                                <div class="md-form mt-0">
                                    <input name="email" type="text" id="materialRegisterFormEmail" class="form-control">
                                    <label for="materialRegisterFormEmail">E-mail</label>
                                </div>

                                <!-- Phone number -->
                                <div class="md-form mt-0">
                                    <input name="password" type="password" id="materialRegisterFormEmail" class="form-control">
                                    <label for="materialRegisterFormEmail">Password</label>
                                </div>


                                <div class="md-form">
                                    <input name="hp" type="text" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                                    <label for="materialRegisterFormPassword">Handphone</label>
                                    <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                        At least 8 characters and 1 digit
                                    </small>
                                </div>



                                <div class="form-group">
                                    <select name="role" class="mdb-select md-form mt-5" searchable="Jenis User">
                                        <option value="" disabled selected>Jenis User</option>
                                        <option value="0">Admin Koperasi</option>
                                        <option value="1">Admin PTSP</option>
                                        <option value="2">Verificator</option>
                                        <option value="3">Admin</option>
                                        <option value="4">Super Admin</option>
                                        <option value="5">Admin Kabupaten Gorontalo</option>
                                        <option value="6">Admin Kota Gorontalo</option>
                                        <option value="7">Admin Kabupaten Gorontalo Utara</option>
                                    </select>
                                </div>
                                <!-- Sign up button -->
                                <button class="btn btn-primary btn-md my-5 ml-0" type="submit">Tambah user</button>

                                <!-- Terms of service -->
                                <p>By clicking
                                    <em>Sign up</em> you agree to our
                                    <a href="" target="_blank">terms of service</a>
                            </form>
                            <!-- Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>