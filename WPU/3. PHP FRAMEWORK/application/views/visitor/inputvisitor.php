<?php
$_SESSION['no_polisi'] = $_POST['no_polisi'];
$_SESSION['jenis_shipment'] = $_POST['jenis_shipment'];
$_SESSION['id_shipment'] = $_POST['id_shipment'];

?>
<!-- Start Script -->
<script src="<?= BASEURL; ?>/js/visitor/inputvisitor.js"></script>
<!-- End Script -->

<div class="container-sm table-responsive">
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
                    <th class="no-sort align-middle text-center bg-black text-white">NIK</th>
                    <th class="no-sort align-middle text-center bg-black text-white">Nama Lengkap</th>
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
                            <td class="text-center"><img src="../img/user/<?= $row["foto"] ?>" width="50px" alt=""></td>

                            <td class="text-center">
                                <a href="<?= BASEURL ?>/cpanel/ubahUser/<?= $row["id"] ?>" class="btn btn-sm btn-success tombolUbahData" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?= $row['id'] ?>"><i class="fas fa-edit"></i></a>
                                <a onclick="deleteResult('<?= BASEURL ?>/cpanel/hapusUser/<?= $row['id'] ?>');" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endif; ?>
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
                    <form id="formKaryawan" action="<?= BASEURL; ?>/cpanel/tambahUser" method="post" enctype="multipart/form-data">

                        <div class="container-fluid">
                            <!-- Start Right Form -->
                            <div class="col-md text-center">
                                <div class="mb-3">
                                    <img id="tampilanFoto" class="sizeFoto rounded img-fluid img-thumbnail" src="<?= BASEURL ?>/img/uploadimage.jpg" class="rounded" />
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="form-control" name="foto" id="foto" accept="image/*" capture onchange="loadFoto(event)" hidden>
                                    <label for="foto"><a class="btn btn-secondary fw-bold" for="foto"><i class="fas fa-camera"></i> Uploud Foto</a></label>
                                </div>
                            </div>
                            <!-- End Right Form -->

                            <!-- Start Center Form -->
                            <div class="col-md">
                                <h3>Data Pengunjung</h3>
                                <hr>
                                <div class="mb-3">
                                    <label for="tipe_visitor" class="form-label control-label">Tipe Visitor</label>
                                    <input type="text" name="tipe_visitor" class="form-control" id="tipe_visitor" value="EXTERNAL" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label control-label">Jenis Kelamin</label>
                                    <select class="form-select" name="jenis_kelamin">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_visitor" class="form-label control-label">Nama</label>
                                    <input type="text" name="nama_visitor" class="form-control" id="nama_visitor">
                                </div>
                                <div class="mb-3">
                                    <label for="instansi" class="form-label control-label">Instansi</label>
                                    <input type="text" name="instansi" class="form-control" id="instansi">
                                </div>
                                <div class="mb-3">
                                    <label for="tipe_id_visitor" class="form-label control-label">TIPE ID</label>
                                    <select class="form-select" name="tipe_id_visitor">
                                        <option value="NIK">NIK</option>
                                        <option value="KTP">KTP</option>
                                        <option value="SIM">SIM</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nomor_id_visitor" class="form-label control-label">Nomor ID</label>
                                    <input type="text" name="nomor_id_visitor" class="form-control" id="nomor_id_visitor">
                                </div>
                                <div class="mb-3">
                                    <label for="no_tlp" class="form-label control-label">Nomor Handphone</label>
                                    <input type="text" name="no_tlp" class="form-control" id="no_tlp" disabled>
                                </div>
                            </div>
                            <!-- End Center Form -->

                            <!-- Start Left Form -->
                            <div class="col-md">
                                <div class="form-check-inline">
                                    <span class="h3">Data Kedatangan | </span>
                                    <span class="h5"><?= date("d-m-Y,h:m:s") ?></span>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <label for="bertemu" class="form-label control-label">Bertemu</label>
                                    <input type="text" name="bertemu" class="form-control" id="bertemu" placeholder="Nama yang akan ditemui...">
                                </div>
                                <div class="mb-3">
                                    <label for="department" class="form-label control-label">Department</label>
                                    <input type="text" name="department" class="form-control" id="department">
                                </div>
                                <div class="mb-3">
                                    <label for="keperluan" class="form-label control-label">Keperluan</label>
                                    <input type="text" name="keperluan" class="form-control" id="keperluan">
                                </div>
                                <div class="mb-3">
                                    <label for="suhu_tubuh" class="form-label control-label">Suhu Tubuh</label>
                                    <input type="text" name="suhu_tubuh" class="form-control" id="suhu_tubuh">
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_shipment" class="form-label control-label">Jenis Barang</label>
                                    <input type="text" name="jenis_shipment" class="form-control" id="jenis_shipment" value="<?= $_SESSION['jenis_shipment'] ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="id_shipment" class="form-label control-label">ID SHIPMENT</label>
                                    <input type="text" name="id_shipment" class="form-control" id="id_shipment" value="<?= $_SESSION['id_shipment'] ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="no_polisi" class="form-label control-label">Parkir - No Polisi</label>
                                    <input type="text" name="no_polisi" class="form-control" id="no_polisi" value="<?= $_SESSION['no_polisi'] ?>" disabled>
                                </div>
                                <div>
                                    <label for="kartu_visitor" class="form-label control-label">Kartu Visitor</label>
                                    <input type="number" name="kartu_visitor" class="form-control" id="kartu_visitor" value="0">
                                </div>
                                <!-- <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="sudah_induksi" value="sudah_induksi">
                                        <label class="form-check-label" for="sudah_induksi">Sudah Induksi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="paham_prosedur" value="paham_prosedur">
                                        <label class="form-check-label" for="paham_prosedur">Paham Prosedur Safety</label>
                                    </div> -->
                                <div class="py-4 float-end">
                                    <button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                                    <button type="submit" class="btn btn-success fw-bold" onclick="submitResult(event);">Simpan</button>
                                </div>
                            </div>
                            <!-- End Left Form -->

                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>