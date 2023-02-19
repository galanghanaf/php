<!-- Start Script -->
<script src="<?= BASEURL; ?>/js/cpanel/ubahkaryawan.js"></script>
<!-- End Script -->

<div class="dashboard-content px-5 pt-4 mt-5">
    <div class="container-fluid mt-5">
        <form class="row g-3 mb-5" id="formKaryawan" action="<?= BASEURL; ?>/cpanel/ubahKaryawan" method="post" enctype="multipart/form-data">
            <input type="number" name="id" id="id" value="<?= $data['tbl_karyawan']['id'] ?>" hidden>
            <input type="text" name="username" id="username" value="<?= $data['tbl_karyawan']['username'] ?>" hidden>
            <input type="text" name="email" id="email" value="<?= $data['tbl_karyawan']['email'] ?>" hidden>
            <input type="password" name="pass" id="pass" value="<?= $data['tbl_karyawan']['pass'] ?>" hidden>
            <input type="text" name="sys_admin" id="sys_admin" value="<?= $data['tbl_karyawan']['sys_admin'] ?>" hidden>
            <input type="text" name="locked" id="locked" value="<?= $data['tbl_karyawan']['locked'] ?>" hidden>
            <input type="text" name="aktif" id="aktif" value="<?= $data['tbl_karyawan']['aktif'] ?>" hidden>
            <input type="text" name="created_at" id="created_at" value="<?= $data['tbl_karyawan']['created_at'] ?>" hidden>
            <input type="text" name="fotoLama" id="fotoLama" value="<?= $data['tbl_karyawan']['foto'] ?>" hidden>
            <div class="row">
                <!-- Start Right Form -->
                <div class="col-md-3 mx-5 mt-5">
                    <div class="mb-3 text-center">
                        <img id="tampilanFoto" class="sizeFoto rounded img-fluid img-thumbnail" src="<?= BASEURL ?>/img/karyawan/<?= $data['tbl_karyawan']['foto'] ?>" class="rounded" />
                    </div>
                    <div class="text-center">
                        <input type="file" class="form-control" name="foto" id="foto" accept="image/*" onchange="loadFoto(event)" hidden>
                        <label for="foto"><a class="btn btn-secondary fw-bold" for="foto"><i class="fas fa-camera"></i> Uploud Foto</a></label>
                    </div>
                </div>
                <!-- End Right Form -->

                <!-- Start Left Form -->
                <div class="col-md mx-5">
                    <div>
                        <span class="h2"><?= $data['title'] ?> | </span>
                        <span class="h5"><?= date("d-m-Y,h:m:s") ?></span>

                        <hr>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nik" class="form-label control-label">NIK :</label>
                            <input type="text" name="nik" class="form-control" id="nik" value="<?= $data['tbl_karyawan']['nik'] ?>">
                        </div>
                        <div class="col">
                            <label for="plant_id" class="form-label control-label">Plant ID :</label>
                            <input type="text" name="plant_id" class="form-control" id="plant_id" value="<?= $data['tbl_karyawan']['plant_id'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="nama_karyawan" class="form-label control-label">Nama Karyawan :</label>
                            <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan" value="<?= $data['tbl_karyawan']['nama_karyawan'] ?>">
                        </div>
                        <div class="col">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label>
                            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                                <option <?php if ($data['tbl_karyawan']['jenis_kelamin'] == 'Pria') {
                                            echo 'selected';
                                        } ?> value="Pria">Pria</option>
                                <option <?php if ($data['tbl_karyawan']['jenis_kelamin'] == 'Wanita') {
                                            echo 'selected';
                                        } ?> value="Wanita">Wanita</option>

                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="no_tlp" class="form-label">Nomor Handphone :</label>
                            <input type="text" name="no_tlp" class="form-control" id="no_tlp" value="<?= $data['tbl_karyawan']['no_tlp'] ?>">
                        </div>
                        <div class="col">
                            <label for="department" class="form-label">Department :</label>
                            <input type="text" name="department" class="form-control" id="department" value="<?= $data['tbl_karyawan']['department'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="line" class="form-label">Line :</label>
                            <input type="text" name="line" class="form-control" id="line" value="<?= $data['tbl_karyawan']['line'] ?>">
                        </div>
                        <div class="col">
                            <label for="posisi" class="form-label">Posisi :</label>
                            <input type="text" name="posisi" class="form-control" id="posisi" value="<?= $data['tbl_karyawan']['posisi'] ?>">
                        </div>
                    </div>
                    <div class="float-end mt-3">
                        <a href="<?= BASEURL; ?>/cpanel/datakaryawan" class="btn btn-danger fw-bold mx-2"><i class="fas fa-times"></i> Batal</a>
                        <button type="submit" class="btn btn-success fw-bold" onclick="submitResult(event);"><i class='fas fa-plus-circle'></i> Ubah Data</button>
                    </div>
                </div>
                <!-- End Left Form -->

            </div>
        </form>
    </div>
</div>