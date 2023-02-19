<!-- Start Script -->
<script src="<?= BASEURL; ?>/js/user.js"></script>
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
        <table class="table-hover table table-bordered" id="tbl_user">
            <thead>
                <tr>
                    <th class="align-middle text-center bg-black text-white">No</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Username</th>
                    <th class="no-sort align-middle text-center bg-black text-white">NIK</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Nama Lengkap</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Email</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Foto</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($data['tbl_user'] as $row) : ?>
                    <tr class="align-middle">
                        <td class="text-center"><?= $i++ ?></td>
                        <td class="text-center"><?= $row['username']; ?></td>
                        <td class="text-center"><?= $row['nik']; ?></td>
                        <td class="text-center"><?= $row['nama_lengkap']; ?></td>
                        <td class="text-center"><?= $row['email']; ?></td>
                        <td class="text-center"><img src="../img/user/<?= $row["foto"] ?>" width="50px" alt=""></td>

                        <td class="text-center">
                            <a href="<?= BASEURL ?>/cpanel/ubahUser/<?= $row["id"] ?>" class="btn btn-sm btn-success tombolUbahData" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?= $row['id'] ?>"><i class="fas fa-edit"></i></a>
                            <a onclick="deleteResult('<?= BASEURL ?>/cpanel/hapusUser/<?= $row['id'] ?>');" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <!-- Start Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class=" modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formUser" action="<?= BASEURL; ?>/cpanel/tambahUser" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id">
                        <input type="hidden" name="fotoLama" id="fotoLama">
                        <div class="row mb-4">
                            <div class="col">
                                <label for="nik" class="form-label control-label">NIK</label>
                                <input type="number" name="nik" class="form-control" id="nik">
                            </div>
                            <div class="col">
                                <label for="username" class="form-label control-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="nama_lengkap" class="form-label control-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                            </div>
                            <div class="col">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" id="jabatan">
                            </div>
                            <div class="col">
                                <label for="pass" class="form-label control-label">Password</label>
                                <input type="password" class="form-control" name="pass" id="pass">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="region_id" class="form-label">Region</label>
                                <input type="text" class="form-control" name="region_id" id="region_id">
                            </div>
                            <div class="col">
                                <label for="sys_admin" class="form-label control-label">System Admin</label>
                                <select class="form-select" aria-label="Default select example" id="sys_admin" name="sys_admin">
                                    <option value="N">No</option>
                                    <option value="Y">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="plant_id" class="form-label">Plant</label>
                                <input type="text" class="form-control" name="plant_id" id="plant_id">
                            </div>
                            <div class="col">
                                <label for="locked" class="form-label control-label">Locked</label>
                                <select class="form-select" aria-label="Default select example" id="locked" name="locked">
                                    <option value="N">No</option>
                                    <option value="Y">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="line_id" class="form-label">Line</label>
                                <input type="text" class="form-control" name="line_id" id="line_id">
                            </div>
                            <div class="col">
                                <label for="aktif" class="form-label control-label">Aktif</label>
                                <select class="form-select" aria-label="Default select example" id="aktif" name="aktif">
                                    <option value="N">No</option>
                                    <option value="Y">Yes</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control tipeFoto" name="foto" id="foto">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                            <button type="submit" class="btn btn-success fw-bold" onclick="submitResult(event);">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
</div>