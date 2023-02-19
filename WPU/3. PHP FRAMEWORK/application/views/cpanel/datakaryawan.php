<!-- Start Script -->
<script src="<?= BASEURL; ?>/js/cpanel/datakaryawan.js"></script>
<!-- End Script -->


<div class="dashboard-content px-3 pt-4">
    <div class="container-sm mt-5">
        <div class="text-center">
            <h1 class="fw-bold"><?= $data['title']; ?></h1>
            <button type="button" class="btn btn-success tombolTambahData text-center fw-bold mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class='fas fa-plus-circle'></i> Tambah Data
            </button>
        </div>
        <?php Flasher::flash(); ?>
        <table class="table-hover table table-bordered" id="tbl_karyawan">
            <thead>
                <tr>
                    <th class="align-middle text-center bg-black text-white">No</th>
                    <th class="no-sort align-middle text-center bg-black text-white">NIK</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Nama Karyawan</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Department</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Line</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Posisi</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Foto</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data['tbl_karyawan'] as $row) : ?>
                    <?php if (!$row['username']) : ?>
                        <tr class="align-middle">
                            <td class="text-center"><?= $i++ ?></td>
                            <td class="text-center"><?= $row['nik']; ?></td>
                            <td class="text-center"><?= $row['nama_karyawan']; ?></td>
                            <td class="text-center"><?= $row['department']; ?></td>
                            <td class="text-center"><?= $row['line']; ?></td>
                            <td class="text-center"><?= $row['posisi']; ?></td>
                            <td class="text-center"><img src="../img/karyawan/<?= $row["foto"] ?>" width="50px" alt=""></td>

                            <td class="text-center">
                                <a href="<?= BASEURL ?>/cpanel/dataKaryawanById/<?= $row["id"] ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                <a onclick="deleteResult('<?= BASEURL ?>/cpanel/hapusKaryawan/<?= $row['id'] ?>');" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <!-- Start Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen">
            <div class=" modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Karyawan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formKaryawan" action="<?= BASEURL; ?>/cpanel/tambahKaryawan" method="post" enctype="multipart/form-data">
                        <input type="text" name="username" id="username" value="" hidden>
                        <input type="text" name="email" id="email" value="" hidden>
                        <input type="password" name="pass" id="pass" value="" hidden>
                        <input type="text" name="sys_admin" id="sys_admin" value="" hidden>
                        <input type="text" name="locked" id="locked" value="" hidden>
                        <input type="text" name="aktif" id="aktif" value="" hidden>
                        <div class="row">
                            <!-- Start Right Form -->
                            <div class="col-md-3 mx-5 mt-5">
                                <div class="mb-3 text-center">
                                    <img id="tampilanFoto" class="sizeFoto rounded img-fluid img-thumbnail" src="<?= BASEURL ?>/img/uploadimage.jpg" class="rounded" />
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
                                    <span class="h2">Tambah <?= $data['title'] ?> | </span>
                                    <span class="h5"><?= date("d-m-Y,h:m:s") ?></span>

                                    <hr>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="nik" class="form-label control-label">NIK :</label>
                                        <input type="text" name="nik" class="form-control" id="nik">
                                    </div>
                                    <div class="col">
                                        <label for="plant_id" class="form-label control-label">Plant ID :</label>
                                        <input type="text" name="plant_id" class="form-control" id="plant_id">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="nama_karyawan" class="form-label control-label">Nama Karyawan :</label>
                                        <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan">
                                    </div>
                                    <div class="col">
                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin :</label>
                                        <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="no_tlp" class="form-label">Nomor Handphone :</label>
                                        <input type="text" name="no_tlp" class="form-control" id="no_tlp">
                                    </div>
                                    <div class="col">
                                        <label for="department" class="form-label">Department :</label>
                                        <input type="text" name="department" class="form-control" id="department">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="line" class="form-label">Line :</label>
                                        <input type="text" name="line" class="form-control" id="line">
                                    </div>
                                    <div class="col">
                                        <label for="posisi" class="form-label">Posisi :</label>
                                        <input type="text" name="posisi" class="form-control" id="posisi">
                                    </div>
                                </div>
                                <div class="float-end mt-3">
                                    <button type="button" class="btn btn-danger fw-bold mx-2" data-bs-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                                    <button type="submit" class="btn btn-success fw-bold" onclick="submitResult(event);"><i class='fas fa-plus-circle'></i> Tambah Data</button>
                                </div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
</div>